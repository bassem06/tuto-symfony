<?php

namespace Bassem\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BassemFirstBundle:Default:index.html.twig');
    }

    public function premierAction($nom)
    {

        return $this->render('BassemFirstBundle:Default:premier.html.twig',
    array(
        "nom"=>$nom
    )
    );
    }
}
