<?php

namespace Bassem\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        //récupérer notre session
        $session=$request->getSession();
        //essaye de récupérer ma variable de session
       $maVariable=$session->get('maVariable');
       if(isset($maVariable)){
           echo 'Session déja ouverte : '.$maVariable;
       }else {
           echo 'Session vide => init session';
           $session->set('maVariable','bassem');
       }
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
