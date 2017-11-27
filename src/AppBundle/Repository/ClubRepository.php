<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


class ClubRepository extends EntityRepository
{
    public function get()
    {
        $qb = $this->createQueryBuilder('c');
        return $qb;
    }

    public function getLocations()
    {
        $qb = $this->get()
            ->select('c.name', 'c.longitude', 'c.latitude')
            ->getQuery();

        return $qb->getResult();
    }

}
