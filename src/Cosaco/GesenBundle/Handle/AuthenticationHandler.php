<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// AuthenticationHandler.php
 
namespace Cosaco\GesenBundle\Handle;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Bridge\Doctrine\Security\User\EntityUserProvider;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices;
 
class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
	private $router;
	private $session;
        private $translator;
        private $em;
 
	/**
	 * Constructor
	 *
	 * @author 	Joe Sexton <joe@webtipblog.com>
	 * @param 	RouterInterface $router
	 * @param 	Session $session
	 */
	public function __construct( RouterInterface $router, Session $session, TranslatorInterface $translator, EntityManager $em)
	{
		$this->router  = $router;
		$this->session = $session;
                $this->translator = $translator; 
                $this->em = $em;
               
	}
 
	/**
	 * onAuthenticationSuccess
 	 *
	 * @author 	Joe Sexton <joe@webtipblog.com>
	 * @param 	Request $request
	 * @param 	TokenInterface $token
	 * @return 	Response
	 */
        public function onAuthenticationSuccess( Request $request, TokenInterface $token )
	{

            // if AJAX login
            if ( $request->isXmlHttpRequest() ) {
                    
                // Generamos respuesta en formato Json
                $name = $token->getUser()->getPrimerNombre();
                $array = array( 'success' => true, 'name'=> $name ); // data to return via JSON

                $response = new Response( json_encode( $array ) );
                
                // En caso de tener seleccionada la opcion recordarme en el form generamos la cookie
                if($request->get('_remember_me')=='on') 
                {     

                    $providerKey = 'main'; // defined in security.yml
                    $securityKey = "%secret%"; // defined in security.yml
                    
                    // Cargamos la entidad a cargo de implementar la seguridad
                    $userProvider = array($this->em->getRepository('CosacoGesenBundle:Usuario'));

                   // Creamos la cookie
                    $rememberMeService = new TokenBasedRememberMeServices($userProvider, $securityKey, $providerKey, array(
                                    'path' => '/',
                                    'name' => 'REMEMBERME',
                                    'domain' => null,
                                    'secure' => false,
                                    'httponly' => true,
                                    'lifetime' => '%rememberme_lifetime%', // Parametro
                                    'always_remember_me' => false,
                                    'remember_me_parameter' => '_remember_me')
                                );
                    
                    // La agregamos a la respuesta
                    $rememberMeService->loginSuccess($request, $response, $token);
                    
               } 
               else 
               {
                   /*
                    * En caso de no tener activada la opción recordarme 
                    * Se hace un borrado preventivo de la cookie rememberme
                    */
                   $response->headers->clearCookie('REMEMBERME');
               }
                        
                    /*
                     * Retornamos la respuesta en formato Json
                     */
                    $response->headers->set( 'Content-Type', 'application/json' );

                    return $response;
 
		// if form login 
		} else {
 
			if ( $this->session->get('_security.main.target_path' ) ) {
 
				$url = $this->session->get( '_security.main.target_path' );
 
			} else {
 
				$url = $this->router->generate( '_home_page' );
 
			} // end if
 
			return new RedirectResponse( $url );
 
		}
	}
 	/**
	 * onAuthenticationFailure
	 *
	 * @author 	Joe Sexton <joe@webtipblog.com>
	 * @param 	Request $request
	 * @param 	AuthenticationException $exception
	 * @return 	Response
	 */
	 public function onAuthenticationFailure( Request $request, AuthenticationException $exception )
	{
		// if AJAX login
		if ( $request->isXmlHttpRequest() ) {
                        
                        // Excepcion en ingles
                        $error=$exception->getMessage();
                        
                        // Mensaje en español
                        $error_es= $this->translator->trans($error, array(), 'security');

                        // $array = array( 'success' => false, 'message' => $exception->getMessage() ); // data to return via JSON
			$array = array( 'success' => false, 'message' => $error_es ); // data to return via JSON
			$response = new Response( json_encode( $array ) );
			$response->headers->set( 'Content-Type', 'application/json' );
 
			return $response;
 
		// if form login 
		} else {
                                        
			// set authentication exception to session
			$request->getSession()->set(SecurityContextInterface::AUTHENTICATION_ERROR, $exception);
 
			return new RedirectResponse( $this->router->generate( 'gsn_login' ) );
		}
	}
}       