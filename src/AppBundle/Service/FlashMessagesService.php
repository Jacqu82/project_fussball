<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Translation\TranslatorInterface;

class FlashMessagesService
{
    protected $flashBag;
    protected $translator;

    public function __construct(SessionInterface $session, TranslatorInterface $translator)
    {
        $this->flashBag = $session->getFlashBag();
        $this->translator = $translator;
    }

    public function setSuccess($message, $params = [])
    {
        $this->flashBag->set('success', $this->translator->trans($message, $params, 'flash'));
    }

    public function setError($message, $params = [])
    {
        $this->flashBag->set('error', $this->translator->trans($message, $params, 'flash'));
    }

    public function setWarning($message, $params = [])
    {
        $this->flashBag->set('warning', $this->translator->trans($message, $params, 'flash'));
    }

    public function getCurrent()
    {
        foreach (array('success', 'error', 'warning') as $type) {
            if ($this->flashBag->has($type))
                return array('type' => $type, 'message' => $this->flashBag->get($type));
        }

        return null;
    }
}
