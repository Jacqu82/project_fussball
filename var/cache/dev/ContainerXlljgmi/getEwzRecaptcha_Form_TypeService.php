<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ewz_recaptcha.form.type' shared service.

return $this->services['ewz_recaptcha.form.type'] = new \EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType('6LeglT8UAAAAAM82FmfitiqWoTZgLBwHGZ3Pg-nZ', true, false, new \EWZ\Bundle\RecaptchaBundle\Locale\LocaleResolver('kernel.default_locale', false, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}), 'www.google.com');
