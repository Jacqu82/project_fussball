<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Club;
use AppBundle\Form\ClubType;
use AppBundle\Form\FavouriteType;
use AppBundle\Manager\ClubManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClubController extends Controller
{

    /**
     * @Route("/club/add", name="club_add")
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addClubAction(Request $request)
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $file = $club->getEmblem();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('path_directory'),
                $fileName);
            $club->setEmblem($fileName);
            $this->get(ClubManager::class)->addClub($club);

            return $this->redirectToRoute('club_show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/add_club.html.twig', ['form' => $form->createView()]);

    }

    /**
     * @Route("/club/show/{id}", name="club_show_id")
     *
     * @param Club $club
     * @return Response
     */
    public function showClubIdAction(Club $club)
    {
        $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('club_delete', ['id' => $club->getId()]))
            ->setMethod(Request::METHOD_DELETE)
            ->add('submit', SubmitType::class, [
                'label' => 'Usuń klub',
                'attr' => ['class' => 'btn btn-danger btn-delete']])
            ->getForm();

        return $this->render('club/show_club_id.html.twig', [
            'club' => $club,
            'deleteForm' => $deleteForm->createView()
        ]);
    }

    /**
     * @Route("/club/show", name="club_show_all")
     *
     * @return Response
     */
    public function showAllClubsAction()
    {
        $clubs = $this->get(ClubManager::class)->getAllClubsByName();

        return $this->render('club/show_all_clubs.html.twig', ['clubs' => $clubs]);
    }

    /**
     * @Route("/club/edit{id}", name="club_edit")
     *
     * @param Request $request
     * @param Club $club
     * @return RedirectResponse|Response
     */
    public function editClubAction(Request $request, Club $club)
    {
        $form = $this->createForm(ClubType::class, $club, ['noPhoto' => true, 'edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $club = $form->getData();
            $file = $club->getEmblem();
            $club->setEmblem($file);
            $this->get(ClubManager::class)->editClub($club);

            return $this->redirectToRoute('club_show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/edit_club.html.twig', [
            'form' => $form->createView(),
            'club' => $club
        ]);
    }

    /**
     * @Route("/emblem/edit/{id}", name="emblem_edit")
     *
     * @param Request $request
     * @param Club $club
     * @return RedirectResponse|Response
     */
    public function editEmblemAction(Request $request, Club $club)
    {
        $form = $this->createForm(ClubType::class, $club, [
            'noPhoto' => false,
            'justPhoto' => true,
            'edit' => true
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $file = $club->getEmblem();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('path_directory'),
                $fileName);
            $club->setEmblem($fileName);
            $this->get(ClubManager::class)->editClub($club);

            return $this->redirectToRoute('club_show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/edit_emblem.html.twig', [
            'club' => $club,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/club/delete/{id}", name="club_delete")
     *
     * @Method("DELETE")
     * @param Club $club
     * @return RedirectResponse
     */
    public function deleteClubAction(Club $club)
    {
        $this->get(ClubManager::class)->deleteClub($club);
        return $this->redirectToRoute('club_show_all');
    }
}
