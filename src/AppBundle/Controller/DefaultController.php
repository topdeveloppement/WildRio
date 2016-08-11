<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/portofolio", name="portofolio")
     */
    public function EpreuveAction(Request $request)
    {
        $em = $this->getDoctrine()->getRepository('AppBundle:Epreuve');

        $epreuve = $em->getEpreuve();

        return $this->render('section/portofolio.html.twig', ['epreuve' => $epreuve]);
    }
}
