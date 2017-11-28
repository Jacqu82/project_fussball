<?php

namespace AppBundle\Manager;


use AppBundle\Entity\Game;
use AppBundle\Manager\Base\EntityManager;


class GameManager extends EntityManager
{
    protected $entityName = 'Game';

    public function getGameRepository()
    {
        return $this->em->getRepository('AppBundle:Game');
    }

    public function getAllGames()
    {
        return $this->repository->findAll();
    }


    public function addGame(Game $game)
    {
        $teamA = $game->getTeamA();
        $goalA = $game->getGoalA();
        $teamB = $game->getTeamB();
        $goalB = $game->getGoalB();
        $date = $game->getDate();
        $hour = $game->getHour();

        $game
            ->setTeamA($teamA)
            ->setGoalA($goalA)
            ->setTeamB($teamB)
            ->setGoalB($goalB)
            ->setDate($date)
            ->setHour($hour);

        $this->em->persist($game);
        $this->em->flush();
    }

//    public function editClub(Club $club)
//    {
//        $this->em->persist($club);
//        $this->em->flush();
//    }
//
//    public function deleteClub(Club $club)
//    {
//        $this->em->remove($club);
//        $this->em->flush();
//    }


}
