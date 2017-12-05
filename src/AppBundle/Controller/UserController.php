<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User\Register;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User\User;
use AppBundle\Form\RecoveryType;
use AppBundle\Manager\UserManager;
use AppBundle\Controller\Base\Controller;
use AppBundle\Form\RegisterType;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{

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
                $this->get(UserManager::class)->create($register->getUser());
                $this->setSuccess('Twoje konto zostało poprawnie założone! Na podany przez Ciebie adres email została wysłana wiadomość z linkiem aktywacyjnym.');
            } else {
                $this->setError('W formularzu występują błędy! Popraw je i spróbuj ponownie');
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
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
            return $this->redirectToRoute('homepage');

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        if (isset($error)) {
            $this->setError('Nieprawidłowy login i/lub hasło!');
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
                $manager = $this->get(UserManager::class);
                $user = $manager->getOneBy(['email' => $form->get('email')->getData()]);
                $manager->sendRecoveryMessage($user);
                $this->setSuccess('Na Twój nowo podany adres email została wysłana wiadomość z instrukcją dalszego postępowania.');
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
        $manager = $this->get(UserManager::class);

        switch ($type) {
            case 'account':
                if ($user->isEnabled()) {
                    $this->setWarning('Twoje konto zostało wcześniej aktywowane i jest już aktywne.');
                } elseif ($manager->activate($user, $token)) {
                    $this->setSuccess('Twoje konto zostało poprawnie aktywowane :)');
                } else {
                    $this->setError('Aktywacja nie powiodła się. Użyty adres URL jest nieprawidłowy. Prosimy o ponowne kliknięcie w link, bądź dokładne przekopiowanie linku.');
                }
                break;

            case 'password':
                if ($manager->recovery($user, $token)) {
                    $this->setSuccess('Proces odzyskiwania dostępu do konta został zakończony powodzeniem. Na Twój adres email wysłaliśmy nowe dane dostępowe.');
                } else {
                    $this->setError('Aktywacja nie powiodła się. Użyty adres URL jest nieprawidłowy. Prosimy o ponowne kliknięcie w link, bądź dokładne przekopiowanie linku.');
                }
                break;

            case 'email':
                if ($manager->changeEmail($user, urldecode($value), $token)) {
                    $this->setSuccess('Adres email dla Twojego konta został poprawnie zmieniony.');
                } else {
                    $this->setError('Aktywacja nie powiodła się. Użyty adres URL jest nieprawidłowy. Prosimy o ponowne kliknięcie w link, bądź dokładne przekopiowanie linku.');
                }
                break;

            default:
                $this->createNotFoundException();
        }

        return $this->redirectToRoute('homepage');
    }
}
