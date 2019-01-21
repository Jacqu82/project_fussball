<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\Register;
use AppBundle\Service\FlashMessagesService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User\User;
use AppBundle\Form\RecoveryType;
use AppBundle\Manager\UserManager;
use AppBundle\Form\RegisterType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class UserController extends Controller
{
    private $userManager;
    private $checker;
    private $flashMessages;

    public function __construct(UserManager $userManager, AuthorizationCheckerInterface $checker, FlashMessagesService $flashMessages)
    {
        $this->userManager = $userManager;
        $this->checker = $checker;
        $this->flashMessages = $flashMessages;
    }

    /**
     * @Route("/register")
     *
     * @return Response
     */
    public function registerAction()
    {

        $register = new Register();
        $form = $this->createForm(RegisterType::class, $register, [
            'action' => $this->generateUrl('register')
        ]);

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/register/create", name="register")
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request)
    {
        $register = new Register();
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $this->userManager->create($register->getUser());
                $this->flashMessages->setSuccess('Twoje konto zostało poprawnie założone! Na podany przez Ciebie adres email została wysłana wiadomość z linkiem aktywacyjnym.');
            } else {
                $this->flashMessages->setError('W formularzu występują błędy! Popraw je i spróbuj ponownie');
            }
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        if ($this->checker->isGranted('ROLE_USER'))
            return $this->redirectToRoute('homepage');

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if (isset($error)) {
            $this->flashMessages->setError('Nieprawidłowy login i/lub hasło!');
        }

        return $this->render('user/login.html.twig', [
            'username' => $lastUsername
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
    }

    /**
     * @Route("/recovery", name="recovery")
     *
     * @param Request $request
     * @return Response
     */
    public function recoveryAction(Request $request)
    {
        $form = $this->createForm(RecoveryType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $user = $this->userManager->getOneBy(['email' => $form->get('email')->getData()]);
                $this->userManager->sendRecoveryMessage($user);
                $this->flashMessages->setSuccess('Na Twój nowo podany adres email została wysłana wiadomość z instrukcją dalszego postępowania.');
            }
        }

        return $this->render('user/recovery.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/activate/{type}/{id}/{token}/{value}",
     *     name="user_activate",
     *     requirements={"type": "account|password|email", "id": "\d+"})
     *
     * @param $type
     * @param User $user
     * @param $token
     * @param null $value
     * @return RedirectResponse
     */
    public function activateAction($type, User $user, $token, $value = null)
    {
        switch ($type) {
            case 'account':
                if ($user->isEnabled()) {
                    $this->flashMessages->setWarning('Twoje konto zostało wcześniej aktywowane i jest już aktywne.');
                } elseif ($this->userManager->activate($user, $token)) {
                    $this->flashMessages->setSuccess('Twoje konto zostało poprawnie aktywowane :)');
                } else {
                    $this->flashMessages->setError('Aktywacja nie powiodła się. Użyty adres URL jest nieprawidłowy. Prosimy o ponowne kliknięcie w link, bądź dokładne przekopiowanie linku.');
                }
                break;

            case 'password':
                if ($this->userManager->recovery($user, $token)) {
                    $this->flashMessages->setSuccess('Proces odzyskiwania dostępu do konta został zakończony powodzeniem. Na Twój adres email wysłaliśmy nowe dane dostępowe.');
                } else {
                    $this->flashMessages->setError('Aktywacja nie powiodła się. Użyty adres URL jest nieprawidłowy. Prosimy o ponowne kliknięcie w link, bądź dokładne przekopiowanie linku.');
                }
                break;

            default:
                $this->createNotFoundException();
        }

        return $this->redirectToRoute('homepage');
    }
}
