<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\User;
use AppBundle\Form\UserType;
use AppBundle\Manager\ClubManager;
use AppBundle\Manager\UserManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DefaultController extends Controller
{
    private $clubManager;
    private $userManager;
    private $checker;

    public function __construct(ClubManager $clubManager, UserManager $userManager, AuthorizationCheckerInterface $checker)
    {

        $this->clubManager = $clubManager;
        $this->userManager = $userManager;
        $this->checker = $checker;
    }

    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction()
    {
        $places = $this->clubManager->getLocations();
        $locations = json_encode($places);

        return $this->render('default/homepage.html.twig', ['locations' => $locations]);
    }

    /**
     * @Route("/admin", name="admin_panel")
     * @return Response
     */
    public function adminPanelAction()
    {
        if ($this->checker->isGranted('ROLE_ADMIN')) {
            $action = true;
        } else {
            $action = false;
        }

        return $this->render('default/admin_panel.html.twig', ['action' => $action]);
    }

    /**
     * @Route("/user/show", name="user_show_all")
     * @return Response
     */
    public function showAllUsersAction()
    {
        if ($this->checker->isGranted('ROLE_ADMIN')) {
            $action = true;
        } else {
            $action = false;
        }

        $users = $this->userManager->getAllUsersByName();

        return $this->render('user/show_all_users.html.twig', ['users' => $users, 'action' => $action]);
    }

    /**
     * @Route("user/show/{id}", name="user_show_id")
     *
     * @param User $user
     * @return Response
     */
    public function showUserIdAction(User $user)
    {
        $deleteForm = $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', ['id' => $user->getId()]))
            ->setMethod(Request::METHOD_DELETE)
            ->add('submit', SubmitType::class, [
                'label' => 'Usuń',
                'attr' => ['class' => 'btn btn-danger btn-delete']])
            ->getForm();

        return $this->render('user/show_user_id.html.twig', [
            'user' => $user,
            'deleteForm' => $deleteForm->createView()
        ]);
    }

    /**
     * @Route("user/edit/{id}", name="user_edit")
     *
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editUserAction(Request $request, User $user)
    {
        $form = $this->createForm(UserType::class, $user, ['edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->userManager->editUser($user);

                return $this->redirectToRoute('user_show_id', ['id' => $user->getId()]);
            }
        }

        return $this->render('user/edit_user.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/user/delete/{id}", name="user_delete")
     *
     * @Method("DELETE")
     * @param User $user
     * @return RedirectResponse
     */
    public function deleteUserAction(User $user)
    {
        $this->userManager->deleteUser($user);
        return $this->redirectToRoute('user_show_all');
    }
}
