<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventDetailController extends Controller
{
    /**
     * @Route("/eventDetail/")
     */
        public function goToEventDetailAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Secondpage/event_detail.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}
