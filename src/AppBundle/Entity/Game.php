<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
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
     * @ORM\ManyToOne(targetEntity="Round", inversedBy="games")
     * @ORM\JoinColumn(name="round_id", referencedColumnName="id")
     */
    private $round;

    /**
     * @ORM\ManyToOne(targetEntity="TeamA", inversedBy="games")
     * @ORM\JoinColumn(name="teamA_id", referencedColumnName="id")
     */
    private $teamA;

    /**
     * @ORM\ManyToOne(targetEntity="TeamB", inversedBy="games")
     * @ORM\JoinColumn(name="teamB_id", referencedColumnName="id")
     */
    private $teamB;

    /**
     * @var int
     *
     * @ORM\Column(name="goalA", type="smallint", nullable=true)
     */
    private $goalA;

    /**
     * @var int
     *
     * @ORM\Column(name="goalB", type="smallint", nullable=true)
     */
    private $goalB;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="hour", type="string", length=20, nullable=true)
     */
    private $hour;


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
     * Set goalA
     *
     * @param integer $goalA
     *
     * @return Game
     */
    public function setGoalA($goalA)
    {
        $this->goalA = $goalA;

        return $this;
    }

    /**
     * Get goalA
     *
     * @return int
     */
    public function getGoalA()
    {
        return $this->goalA;
    }

    /**
     * Set goalB
     *
     * @param integer $goalB
     *
     * @return Game
     */
    public function setGoalB($goalB)
    {
        $this->goalB = $goalB;

        return $this;
    }

    /**
     * Get goalB
     *
     * @return int
     */
    public function getGoalB()
    {
        return $this->goalB;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Game
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hour
     *
     * @param string $hour
     *
     * @return Game
     */
    public function setHour($hour)
    {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * Set teamA
     *
     * @param TeamA $teamA
     *
     * @return $this
     */
    public function setTeamA(TeamA $teamA)
    {
        $this->teamA = $teamA;

        return $this;
    }

    /**
     * Get teamA
     *
     * @return TeamA
     */
    public function getTeamA()
    {
        return $this->teamA;
    }

    /**
     * Set teamB
     *
     * @param TeamB $teamB
     *
     * @return $this
     */
    public function setTeamB(TeamB $teamB)
    {
        $this->teamB = $teamB;

        return $this;
    }

    /**
     * Get teamB
     *
     * @return TeamB
     */
    public function getTeamB()
    {
        return $this->teamB;
    }

    /**
     * Set round
     *
     * @param Round $round
     *
     * @return $this
     */
    public function setRound(Round $round = null)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return Round
     */
    public function getRound()
    {
        return $this->round;
    }
}
