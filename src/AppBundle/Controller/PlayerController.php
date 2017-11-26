<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Club;
use AppBundle\Entity\Player;
use AppBundle\Form\PlayerType;
use AppBundle\Manager\PlayerManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends Controller
{

    /**
     * @Route("/player/add", name="player_add")
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addPlayerAction(Request $request)
    {
        $player = new Player();
        $form = $this->createForm(PlayerType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->get(PlayerManager::class)->addPlayer($player);

//            return $this->redirectToRoute('show_id', ['id' => $player->getId()]);
        }

        return $this->render('player/add_player.html.twig', ['form' => $form->createView()]);

    }

    /**
     * @Route("/show/player/{id}", name="show_player_id")
     *
     * @param Player $player
     * @return Response
     */
    public function showPlayerIdAction(Player $player)
    {
        $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('delete_player', ['id' => $player->getId()]))
            ->setMethod(Request::METHOD_DELETE)
            ->add('submit', SubmitType::class, [
                'label' => 'Usuń zawodnika',
                'attr' => ['class' => 'btn btn-danger btn-delete']])
            ->getForm();

        return $this->render('player/show_player_details.html.twig', [
            'player' => $player,
            'deleteForm' => $deleteForm->createView()
        ]);
    }


    /**
     * @Route("/edit/player/{id}", name="player_edit")
     *
     * @param Request $request
     * @param Player $player
     * @return RedirectResponse|Response
     */
    public function editPlayerAction(Request $request, Player $player)
    {
        $form = $this->createForm(PlayerType::class, $player, ['edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->get(PlayerManager::class)->editPlayer($player);

            return $this->redirectToRoute('show_player_id', ['id' => $player->getId()]);
        }

        return $this->render('player/edit_player.html.twig', [
            'form' => $form->createView(),
            'player' => $player
        ]);
    }


    /**
     * @Route("/delete/player/{id}", name="delete_player")
     *
     * @Method("DELETE")
     * @param Player $player
     * @return RedirectResponse
     */
    public function deletePlayerAction(Player $player)
    {
        $this->get(PlayerManager::class)->deletePlayer($player);
        return $this->redirectToRoute('show_all');
    }


}
