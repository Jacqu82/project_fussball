<?php

namespace AppBundle\Service;

use AppBundle\Entity\User\User;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\Translation\TranslatorInterface;

class MailerService
{
    protected $mailer;
    protected $templating;
    protected $translator;
    protected $params;

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating, TranslatorInterface $translator, array $params)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->translator = $translator;
        $this->params = $params;
    }

//    public function sendEmailActivationMessage(User $user, $email, $token)
//    {
//        //zmiana adresu e-mail
//        $message = \Swift_Message::newInstance()
//            ->setFrom($this->params['sender_address'], $this->params['sender_name'])
//            ->setSubject($this->translator->trans('subject.activate_a_new_email'))
//            ->setTo($email)
//            ->setBody($this->templating->render('user/email/email_activation.html.twig', array('user' => $user, 'email' => $email, 'token' => $token)), 'text/html');
//
//        $this->mailer->send($message);
//    }

    public function sendRecoveryPasswordMessage(User $user, $password)
    {
        $message = \Swift_Message::newInstance()
            ->setFrom($this->params['sender_address'], $this->params['sender_name'])
            ->setSubject('Twoje nowe hasło w Ekstraklasa :)')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('user/email/recovery_password.html.twig', array('user' => $user, 'password' => $password)), 'text/html');

        $this->mailer->send($message);
    }

    public function sendRecoveryMessage(User $user, $token)
    {
        //wiadomośc z nowym hasłem
        $message = \Swift_Message::newInstance()
            ->setFrom($this->params['sender_address'], $this->params['sender_name'])
            ->setSubject('Zmiana hasła w Ekstraklasa!')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('user/email/recovery.html.twig', array('user' => $user,'token' => $token)), 'text/html');

        $this->mailer->send($message);
    }

    public function sendRegisterMessage(User $user, $password, $token)
    {
        //wiadomośc rejestracyjna
        $message = \Swift_Message::newInstance()
            ->setFrom($this->params['sender_address'], $this->params['sender_name'])
            ->setSubject('Nowe konto w Ekstraklasa :)')
            ->setTo($user->getEmail())
            ->setBody($this->templating->render('user/email/register.html.twig', array('user' => $user, 'password' => $password, 'token' => $token)), 'text/html');

        $this->mailer->send($message);
    }
//
//    public function sendContactMessage($data)
//    {
//        $message = \Swift_Message::newInstance()
//        ->setFrom($data['email'], $data['name'])
//        ->setSubject($this->translator->trans('subject.contact_message'))
//        ->setTo($this->params['sender_address'])
//        ->setBody($this->templating->render('user/email/contact.html.twig', ['data' => $data]), 'text/html');
//
//        $this->mailer->send($message);
//    }
}
