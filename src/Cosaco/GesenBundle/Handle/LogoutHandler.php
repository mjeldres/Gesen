<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// LogoutHandler.php
 
namespace Cosaco\GesenBundle\Handle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\LogoutException;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class LogoutHandler implements LogoutSuccessHandlerInterface
{
    private $router;
    private $session;
    private $translator;
    
    public function _construct(Router $router, Session $session, TranslatorInterface $translator)
    {
        $this->router  = $router;
        $this->session = $session;
        $this->translator = $translator; 
    }
    
    public function onLogoutSuccess(Request $request)
    {
        
        if ( $request->isXmlHttpRequest() ) {

            // Mensaje de respuesta
            $array = array( 'success' => true); // data to return via JSON
	
            // Creamos la respuesta
            $response = new Response( json_encode( $array ) );

            // Formato de la respuesta
            $response->headers->set( 'Content-Type', 'application/json' );
            
            /*
             * Como el logout lo hacemos por ajax debemos borrar las cookies e invalidar la sesón actual
             */
            $response->headers->clearCookie('REMEMBERME');
            
            // Se invalida la sesión
            $request->getSession()->invalidate();
            
            return $response;
            
        } else {
            
            /*
             * Para aquellos logeos sin utilizar ajax
             */
            $referer_url = $request->headers->get('referer');

            $response=new RedirectResponse($referer_url);
            
            return $response; 
        }
    }
    
    public function onLogoutFailure(Request $request, LogoutException $exception) 
    {
        
        if ( $request->isXmlHttpRequest() ) 
        {
            // Mensaje de respuesta
            $array = array( 'success' => false, 'message' => $exception->getMessage()); // data to return via JSON           
            
            // Creamos la respuesta
            $response = new Response( json_encode( $array ) );

            // Formato de la respuesta
            $response->headers->set( 'Content-Type', 'application/json' );
            
            return $response;  
        }
        else 
        {
            
            // Excepcion en ingles
            $error=$exception->getMessage();

            // Mensaje en español
            $error_es= $this->translator->trans($error, array(), 'security');
            
            $this->session->getFlashBag->add("Error cerrando la sesión", $error_es);
            
            // Retornamos a la pagina de login
            return new RedirectResponse( $this->router->generate( 'gsn_login' ) );
            
            
        }
        
    }
}