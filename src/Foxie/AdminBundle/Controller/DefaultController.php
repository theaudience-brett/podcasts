<?php

namespace Foxie\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('FoxieAdminBundle:Default:index.html.twig');
    }
    
    public function loginAction()
    {
        return $this->render('FoxieAdminBundle:Default:login.html.twig');
    }
}
