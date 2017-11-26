<?php


namespace AppBundle\Manager;

use AppBundle\Entity\Player;
use AppBundle\Manager\Base\EntityManager;


class PlayerManager extends EntityManager
{
    protected $entityName = 'Player';

    public function getRateRepository()
    {
        return $this->em->getRepository('AppBundle:Player');
    }

//    public function getAllClubsByName()
//    {
//        return $this->repository->findBy(array(), array('name' => 'ASC'));
//    }


    public function addPlayer(Player $player)
    {
        $name = $player->getName();
        $position = $player->getPosition();
        $club = $player->getClub();
        $country = $player->getCountry();
        $dateOfBirth = $player->getDateOfBirth();
        $growth = $player->getGrowth();
        $weight = $player->getWeight();
        $previousClub = $player->getPreviousClub();

        $player
            ->setName($name)
            ->setPosition($position)
            ->setClub($club)
            ->setCountry($country)
            ->setDateOfBirth($dateOfBirth)
            ->setGrowth($growth)
            ->setWeight($weight)
            ->setPreviousClub($previousClub);

        $this->em->persist($player);
        $this->em->flush();
    }

    public function editPlayer(Player $player)
    {
        $this->em->persist($player);
        $this->em->flush();
    }

    public function deletePlayer(Player $player)
    {
        $this->em->remove($player);
        $this->em->flush();
    }


}
