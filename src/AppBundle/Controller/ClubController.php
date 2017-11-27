<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Club;
use AppBundle\Form\ClubType;
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

            return $this->redirectToRoute('show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/add_club.html.twig', ['form' => $form->createView()]);

    }

    /**
     * @Route("/show/{id}", name="show_id")
     *
     * @param Club $club
     * @return Response
     */
    public function showClubIdAction(Club $club)
    {
        $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('delete_club', ['id' => $club->getId()]))
            ->setMethod(Request::METHOD_DELETE)
            ->add('submit', SubmitType::class, [
                'label' => 'Usuń klub',
                'attr' => ['class' => 'btn btn-danger btn-delete']])
            ->getForm();

        return $this->render('club/show_details.html.twig', [
            'club' => $club,
            'deleteForm' => $deleteForm->createView()
        ]);
    }

    /**
     * @Route("/show", name="show_all")
     *
     * @return Response
     */
    public function showAllClubsAction()
    {
        $clubs = $this->get(ClubManager::class)->getAllClubsByName();
        $places = $this->get(ClubManager::class)->getLocations();
        $locations = json_encode($places);

        return $this->render('club/show_all.html.twig', [
            'clubs' => $clubs,
            'locations' => $locations
            ]);
    }

    /**
     * @Route("/edit{id}", name="club_edit")
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

            return $this->redirectToRoute('show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/edit_club.html.twig', [
            'form' => $form->createView(),
            'club' => $club
        ]);
    }

    /**
     * @Route("/edit/emblem/{id}", name="emblem_edit")
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

            return $this->redirectToRoute('show_id', ['id' => $club->getId()]);
        }

        return $this->render('club/edit_photo.html.twig', [
            'club' => $club,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/delete/{id}", name="delete_club")
     *
     * @Method("DELETE")
     * @param Club $club
     * @return RedirectResponse
     */
    public function deleteClubAction(Club $club)
    {
        $this->get(ClubManager::class)->deleteClub($club);
        return $this->redirectToRoute('show_all');
    }
}
