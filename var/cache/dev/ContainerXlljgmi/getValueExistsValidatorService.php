<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Validator\Constraints\ValueExistsValidator' shared autowired service.

return $this->services['AppBundle\Validator\Constraints\ValueExistsValidator'] = new \AppBundle\Validator\Constraints\ValueExistsValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});