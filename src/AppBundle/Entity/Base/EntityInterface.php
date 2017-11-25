<?php

namespace AppBundle\Entity\Base;

interface EntityInterface
{
    public static function getArrayKeys();
    public function getClass();
    public function getClassName();
    public function getEntity();
}
