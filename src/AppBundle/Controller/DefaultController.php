<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/scoreboard/input", name="scoreboard_i")
     *
     */
    public function scoreboardInputAction(Request $request)
    {
        $teams = [
            [
                "id" => "home",
                "name" => "Home",
                "score" => 0,
            ],
            [
                "id" => "guest",
                "name" => "Guest",
                "score" => 0,
            ]
        ];
        $timer = [
            "minutes"      => "10",
            "seconds"      => "0",
            "milliseconds" => "0",
        ];
        return $this->render(
            '@App/Scoreboard/input.html.twig',
            [
                'title' => 'Scoreboard Input',
                'teams' => $teams,
                'timer' => $timer,
            ]
        );
    }

   
    /**
     * @Route("/scoreboard/view", name="scoreboard_v")
     */
    public function scoreboardViewAction(Request $request){
        return $this->render('@App/Scoreboard/view.html.twig', ['title' => 'Scoreboard View']);
    }

   /**
    * @Route("/scoreboard", name="scoreboard")
    */
    public function scoreboardIndexAction(Request $request){
	    return $this->render('@App/Scoreboard/index.html.twig',['title' => 'Scoreboard Home']);
    }

    public function scoreUpdateAction(Request $request) {
    }
}
