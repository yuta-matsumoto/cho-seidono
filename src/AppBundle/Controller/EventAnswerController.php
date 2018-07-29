<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventAnswerController extends Controller
{
    /**
     * @Route("/anserEvent/")
     */
        public function goToAnswerEventAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Secondpage/eventanswer.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}
