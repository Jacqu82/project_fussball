<?php

namespace AppBundle\Controller\Base;

use AppBundle\Service\EntityConverterService;
use AppBundle\Service\FlashMessagesService;

class Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    protected function converter()
    {
        return $this->get(EntityConverterService::class);
    }
    public function setSuccess($message, $params = [])
    {
        $this->get(FlashMessagesService::class)->setSuccess($message, $params);
    }

    protected function setError($message, $params = [])
    {
        $this->get(FlashMessagesService::class)->setError($message, $params);
    }

    protected function setWarning($message, $params = [])
    {
        $this->get(FlashMessagesService::class)->setWarning($message, $params);
    }
}
