<?php

namespace Kevin\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KevinPlatformBundle:Default:index.html.twig');
    }
}
