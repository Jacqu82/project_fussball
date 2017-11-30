<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Manager\ClubManager;
use AppBundle\Manager\UserManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function indexAction()
    {
        $places = $this->get(ClubManager::class)->getLocations();
        $locations = json_encode($places);

        return $this->render('default/homepage.html.twig', ['locations' => $locations]);
    }

    /**
     * @Route("/admin", name="admin_panel")
     * @return Response
     */
    public function adminPanelAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $action = true;
        } else {
            $action = false;
        }

        return $this->render('default/admin_panel.html.twig', ['action' => $action]);
    }

    /**
     * @Route("/user/show", name="show_users_all")
     * @return Response
     */
    public function showAllUsersAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $action = true;
        } else {
            $action = false;
        }

        $users = $this->get(UserManager::class)->getAllUsersByName();

        return $this->render('user/show_users.html.twig', ['users' => $users, 'action' => $action]);
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

        return $this->render('user/user_details.html.twig', [
            'user' => $user,
            'deleteForm' => $deleteForm->createView()
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
        $this->get(UserManager::class)->deleteUser($user);
        return $this->redirectToRoute('show_users_all');
    }
}
