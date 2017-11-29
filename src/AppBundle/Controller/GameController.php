<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use AppBundle\Form\GameType;
use AppBundle\Manager\GameManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GameController extends Controller
{

    /**
     * @Route("/game/add", name="game_add")
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addGameAction(Request $request)
    {
        $game = new Game();
        $form = $this->createForm(GameType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->get(GameManager::class)->addGame($game);

//            return $this->redirectToRoute('show_id', ['id' => $player->getId()]);
        }

        return $this->render('game/add_game.html.twig', ['form' => $form->createView()]);
    }
}
