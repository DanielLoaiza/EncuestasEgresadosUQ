<?php

namespace Core\EncuestasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoreEncuestasBundle:Default:index.html.twig', array('name' => $name));
    }
}
