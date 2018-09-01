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
        $em = $this->getDoctrine()->getManager();
        $eventDetailRepository = $em->getRepository('AppBundle:Event');
        $eventList = $eventDetailRepository->findBy(['id'=> 2]);
        return $this->render('Secondpage/event_detail.html.twig', ['eventList' => $eventList]);
    }
}
