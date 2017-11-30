<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use AppBundle\Form\GameType;
use AppBundle\Manager\GameManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        }

        return $this->render('game/add_game.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/game/show/{id}", name="game_show_id")
     *
     * @param Game $game
     * @return Response
     */
    public function showGameIdAction(Game $game)
    {
        $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('game_delete', ['id' => $game->getId()]))
            ->setMethod(Request::METHOD_DELETE)
            ->add('submit', SubmitType::class, [
                'label' => 'Usuń mecz z terminarza',
                'attr' => ['class' => 'btn btn-danger btn-delete']])
            ->getForm();

        return $this->render('game/show_game_id.html.twig', [
            'game' => $game,
            'deleteForm' => $deleteForm->createView()
        ]);
    }

    /**
     * @Route("/game/edit/{id}", name="game_edit")
     *
     * @param Request $request
     * @param Game $game
     * @return RedirectResponse|Response
     */
    public function editGameAction(Request $request, Game $game)
    {
        $form = $this->createForm(GameType::class, $game, ['edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->get(GameManager::class)->editGame($game);

            return $this->redirectToRoute('game_show_id', ['id' => $game->getId()]);
        }

        return $this->render('game/edit_game.html.twig', [
            'form' => $form->createView(),
            'game' => $game
        ]);
    }

    /**
     * @Route("/game/delete/{id}", name="game_delete")
     *
     * @Method("DELETE")
     * @param Game $game
     * @return RedirectResponse
     */
    public function deleteGameAction(Game $game)
    {
        $this->get(GameManager::class)->deleteGame($game);
        return $this->redirectToRoute('round_show_id', ['id' => $game->getRound()->getId()]);
    }
}
