<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class EventListController extends Controller
{
    /**
     * @Route("/eventList/")
     */
        public function goToEventListAction(Request $request)
    {       
          $em = $this->getDoctrine()->getEntityManager();
          $eventRepository = $em->getRepository('AppBundle:Event');
          $eventList = $eventRepository->findByEventList();
          
        // replace this example code with whatever you need
        return $this->render('Secondpage/eventList.html.twig',
            ['eventList' => $eventList]
        );
    }
}
