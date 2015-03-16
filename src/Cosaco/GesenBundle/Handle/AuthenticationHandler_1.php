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
 
class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
	private $router;
	private $session;
        private $translator;
 
	/**
	 * Constructor
	 *
	 * @author 	Joe Sexton <joe@webtipblog.com>
	 * @param 	RouterInterface $router
	 * @param 	Session $session
	 */
	public function __construct( RouterInterface $router, Session $session, TranslatorInterface $translator)
	{
		$this->router  = $router;
		$this->session = $session;
                $this->translator = $translator; 
               
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
                    
                        
                        $name = $token->getUser()->getPrimerNombre();
                        
			$array = array( 'success' => true, 'name'=> $name ); // data to return via JSON
			$response = new Response( json_encode( $array ) );
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