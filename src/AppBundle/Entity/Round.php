<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Round
 *
 * @ORM\Table(name="round")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoundRepository")
 */
class Round
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Game", mappedBy="round")
     */
    private $games;

    /**
     * @var int
     *
     * @ORM\Column(name="roundNumber", type="string")
     */
    private $roundNumber;

    /**
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="rounds")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     */
    private $season;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->games = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set roundNumber
     *
     * @param string $roundNumber
     *
     * @return Round
     */
    public function setRoundNumber($roundNumber)
    {
        $this->roundNumber = $roundNumber;

        return $this;
    }

    /**
     * Get roundNumber
     *
     * @return string
     */
    public function getRoundNumber()
    {
        return $this->roundNumber;
    }

    /**
     * Set season
     *
     * @param Season $season
     *
     * @return $this
     */
    public function setSeason(Season $season = null)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Add game
     *
     * @param Game $game
     *
     * @return $this
     */
    public function addGame(Game $game)
    {
        $this->games[] = $game;

        return $this;
    }

    /**
     * Remove game
     *
     * @param Game $game
     */
    public function removeGame(Game $game)
    {
        $this->games->removeElement($game);
    }

    /**
     * Get games
     *
     * @return Collection
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->roundNumber;
    }
}
