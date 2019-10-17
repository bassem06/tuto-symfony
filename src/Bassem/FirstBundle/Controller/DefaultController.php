<?php

namespace Bassem\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BassemFirstBundle:Default:index.html.twig');
    }
}
