<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.gbwkqw0' shared service.

return $this->services['service_locator.gbwkqw0'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('club' => function () {
    $f = function (\AppBundle\Entity\Club $v = null) { return $v; }; return $f(${($_ = isset($this->services['AppBundle\Entity\Club']) ? $this->services['AppBundle\Entity\Club'] : $this->services['AppBundle\Entity\Club'] = new \AppBundle\Entity\Club()) && false ?: '_'});
}));
