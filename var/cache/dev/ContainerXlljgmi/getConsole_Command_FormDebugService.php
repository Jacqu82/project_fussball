<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'EWZ\\Bundle\\RecaptchaBundle\\Form\\Type'), array(0 => 'AppBundle\\Form\\ClubType', 1 => 'AppBundle\\Form\\GameType', 2 => 'AppBundle\\Form\\PlayerType', 3 => 'AppBundle\\Form\\RecoveryType', 4 => 'AppBundle\\Form\\RegisterType', 5 => 'AppBundle\\Form\\UserType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 8 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 9 => 'EWZ\\Bundle\\RecaptchaBundle\\Form\\Type\\EWZRecaptchaType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;