<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class EventListController extends Controller
{
    /**
     * @Route("/eventList/")
     */
        public function goToEventListAction(Request $request)
    {
        $eventList = [
            [
                'name' => '７月度松本チーム飲み',
                'circle' => '3',
                'triangle' => '1',
                'cross' => '0',
                'un' => '0',
                'createDate' => '2018/07/14',
            ],
            [
                'name' => '７月度満田チーム飲み',
                'circle' => '0',
                'triangle' => '4',
                'cross' => '0',
                'un' => '0',
                'createDate' => '2018/07/01',
            ],
            [
                'name' => '８月度松本チーム飲み',
                'circle' => '0',
                'triangle' => '4',
                'cross' => '0',
                'un' => '0',
                'createDate' => '2018/07/01',
            ],
            [
                'name' => '８月度満田チーム飲み',
                'circle' => '0',
                'triangle' => '4',
                'cross' => '0',
                'un' => '0',
                'createDate' => '2018/07/01',
            ],
            [
                'name' => '９月度松本チーム飲み',
                'circle' => '0',
                'triangle' => '4',
                'cross' => '0',
                'un' => '0',
                'createDate' => '2018/07/01',
            ],
        ];
        
        // replace this example code with whatever you need
        return $this->render('Secondpage/eventList.html.twig',
            ['eventList' => $eventList]
        );
    }
}
