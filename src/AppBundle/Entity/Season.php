<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeasonRepository")
 */
class Season
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
     * @var string
     *
     * @ORM\Column(name="seasonYears", type="string", length=20)
     */
    private $seasonYears;

    /**
     * @ORM\OneToMany(targetEntity="Round", mappedBy="season")
     */
    private $rounds;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rounds = new ArrayCollection();
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
     * Set seasonYears
     *
     * @param string $seasonYears
     *
     * @return Season
     */
    public function setSeasonYears($seasonYears)
    {
        $this->seasonYears = $seasonYears;

        return $this;
    }

    /**
     * Get seasonYears
     *
     * @return string
     */
    public function getSeasonYears()
    {
        return $this->seasonYears;
    }


    /**
     * Add round
     *
     * @param Round $round
     *
     * @return $this
     */
    public function addRound(Round $round)
    {
        $this->rounds[] = $round;

        return $this;
    }

    /**
     * Remove round
     *
     * @param Round $round
     */
    public function removeRound(Round $round)
    {
        $this->rounds->removeElement($round);
    }

    /**
     * Get rounds
     *
     * @return Collection
     */
    public function getRounds()
    {
        return $this->rounds;
    }
}
