<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Club;
use AppBundle\Entity\Favourite;
use AppBundle\Entity\User;
use AppBundle\Manager\Base\EntityManager;

class FavouriteManager extends EntityManager
{
    protected $entityName = 'Favourite';

    public function getFavouriteRepository()
    {
        return $this->em->getRepository('AppBundle:Favourite');
    }

    public function addFavourite(Favourite $favourite, Club $club, User $user)
    {
        $favourite
            ->setClub($club)
            ->setUser($this->getCurrentUser());
        $this->em->persist($favourite);
        $this->em->flush();
    }
}
