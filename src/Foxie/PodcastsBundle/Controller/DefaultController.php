<?php

namespace Foxie\PodcastsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FoxiePodcastsBundle:Default:index.html.twig');
    }
}
