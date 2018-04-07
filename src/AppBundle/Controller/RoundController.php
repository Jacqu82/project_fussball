<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Round;
use AppBundle\Manager\RoundManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RoundController extends Controller
{
    private $roundManager;

    public function __construct(RoundManager $roundManager)
    {
        $this->roundManager = $roundManager;
    }

    /**
     * @Route("/round/show", name="round_show_all")
     *
     * @return Response
     */
    public function showAllRoundsAction()
    {
        $rounds = $this->roundManager->getAllRounds();

        return $this->render('round/show_all_rounds.html.twig', ['rounds' => $rounds]);
    }

    /**
     * @Route("/round/show/{id}", name="round_show_id")
     *
     * @param Round $round
     * @return Response
     */
    public function showRoundIdAction(Round $round)
    {
        return $this->render('round/show_round_id.html.twig', [
            'round' => $round,
        ]);
    }
}
