<?php

namespace H4md1\JsqueezeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('H4md1JsqueezeBundle:Default:index.html.twig', array('name' => $name));
    }
}
