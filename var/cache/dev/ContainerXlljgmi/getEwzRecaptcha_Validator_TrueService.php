<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ewz_recaptcha.validator.true' shared service.

return $this->services['ewz_recaptcha.validator.true'] = new \EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrueValidator(true, '6LeglT8UAAAAALFcygAMKjEEv7Hj6foo-RPCzSnR', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, $this->parameters['ewz_recaptcha.http_proxy'], false, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, array(), 'www.google.com');
