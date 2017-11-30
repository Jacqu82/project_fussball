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
        $homeTeam = $game->getHomeTeam();
        $goalsHomeTeam = $game->getGoalsHomeTeam();
        $awayTeam = $game->getAwayTeam();
        $goalsAwayTeam = $game->getGoalsAwayTeam();
        $date = $game->getDate();
        $hour = $game->getHour();

        $game
            ->setHomeTeam($homeTeam)
            ->setGoalsHomeTeam($goalsHomeTeam)
            ->setAwayTeam($awayTeam)
            ->setGoalsAwayTeam($goalsAwayTeam)
            ->setDate($date)
            ->setHour($hour);

        $this->em->persist($game);
        $this->em->flush();
    }

    public function editGame(Game $game)
    {
        $this->em->persist($game);
        $this->em->flush();
    }

    public function deleteGame(Game $game)
    {
        $this->em->remove($game);
        $this->em->flush();
    }
}
