<?php

namespace Foxie\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function createAction() {
        $factory = $this->get('security.encoder_factory');
        $ezuser = new \Foxie\AdminBundle\Entity\User();
        $ezuser->setUsername('ezfozie');
        $ezuser->setEmail('ezfoxie@foxienet.com');
        
        $encoder = $factory->getEncoder($ezuser);
        $pass = $encoder->encodePassword('google04', $ezuser->getSalt());
        $ezuser->setPassword($pass);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($ezuser);
        $em->flush();

        return new Response('Created user with ID: '.$ezuser->getId());
        
        
    }
    public function indexAction()
    {
        return $this->render('FoxieAdminBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('FoxieAdminBundle:Default:login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}
