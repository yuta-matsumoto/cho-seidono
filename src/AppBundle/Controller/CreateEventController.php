<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreateEventController extends Controller
{
    /**
     * @Route("/createEvent/")
     */
    public function goToCreateEventAction(Request $request)
    {
        // replace this example code with whatever you need
        //福谷修正
        return $this->render('Secondpage/EventCreate.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}
