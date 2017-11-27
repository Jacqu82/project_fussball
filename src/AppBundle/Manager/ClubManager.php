<?php


namespace AppBundle\Manager;

use AppBundle\Entity\Club;
use AppBundle\Manager\Base\EntityManager;


class ClubManager extends EntityManager
{
    protected $entityName = 'Club';

    public function getClubRepository()
    {
        return $this->em->getRepository('AppBundle:Club');
    }

    public function getAllClubsByName()
    {
        return $this->repository->findBy(array(), array('name' => 'ASC'));
    }

    public function getLocations()
    {
        return $this->getClubRepository()->getLocations();
    }


    public function addClub(Club $club)
    {
        $name = $club->getName();
        $createdAt = $club->getCreatedAt();
        $colours = $club->getColours();
        $address = $club->getAddress();
        $page = $club->getPage();
        $stadium = $club->getStadium();
        $capacity = $club->getCapacity();
        $chairman = $club->getChairman();
        $coach = $club->getCoach();
        $longitude = $club->getLongitude();
        $latitude = $club->getLatitude();

        $club
            ->setName($name)
            ->setCreatedAt($createdAt)
            ->setColours($colours)
            ->setAddress($address)
            ->setPage($page)
            ->setStadium($stadium)
            ->setCapacity($capacity)
            ->setChairman($chairman)
            ->setCoach($coach)
            ->setLongitude($longitude)
            ->setLatitude($latitude);

        $this->em->persist($club);
        $this->em->flush();
    }

    public function editClub(Club $club)
    {
        $this->em->persist($club);
        $this->em->flush();
    }

    public function deleteClub(Club $club)
    {
        $this->em->remove($club);
        $this->em->flush();
    }


}
