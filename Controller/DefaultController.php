<?php

namespace H4md1\JSqueezeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('H4md1JSqueezeBundle:Default:index.html.twig', array('name' => $name));
    }
}
