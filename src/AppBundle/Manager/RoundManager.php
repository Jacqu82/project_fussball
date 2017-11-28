<?php

namespace AppBundle\Manager;

use AppBundle\Manager\Base\EntityManager;

class RoundManager extends EntityManager
{
    protected $entityName = 'Round';

    public function getRoundRepository()
    {
        return $this->em->getRepository('AppBundle:Round');
    }

    public function getAllRounds()
    {
        return $this->repository->findAll();
    }
}
