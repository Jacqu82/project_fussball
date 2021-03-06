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
     * @ORM\ManyToOne(targetEntity="HomeTeam", inversedBy="games")
     * @ORM\JoinColumn(name="home_team_id", referencedColumnName="id")
     */
    private $homeTeam;

    /**
     * @ORM\ManyToOne(targetEntity="AwayTeam", inversedBy="games")
     * @ORM\JoinColumn(name="away_team_id", referencedColumnName="id")
     */
    private $awayTeam;

    /**
     * @var int
     *
     * @ORM\Column(name="goals_home_team", type="smallint", nullable=true)
     */
    private $goalsHomeTeam;

    /**
     * @var int
     *
     * @ORM\Column(name="goals_away_team", type="smallint", nullable=true)
     */
    private $goalsAwayTeam;

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


    /**
     * Set goalsHomeTeam
     *
     * @param integer $goalsHomeTeam
     *
     * @return $this
     */
    public function setGoalsHomeTeam($goalsHomeTeam)
    {
        $this->goalsHomeTeam = $goalsHomeTeam;

        return $this;
    }

    /**
     * Get goalsHomeTeam
     *
     * @return integer
     */
    public function getGoalsHomeTeam()
    {
        return $this->goalsHomeTeam;
    }

    /**
     * Set goalsAwayTeam
     *
     * @param integer $goalsAwayTeam
     *
     * @return $this
     */
    public function setGoalsAwayTeam($goalsAwayTeam)
    {
        $this->goalsAwayTeam = $goalsAwayTeam;

        return $this;
    }

    /**
     * Get goalsAwayTeam
     *
     * @return integer
     */
    public function getGoalsAwayTeam()
    {
        return $this->goalsAwayTeam;
    }

    /**
     * Set homeTeam
     *
     * @param HomeTeam $homeTeam
     *
     * @return $this
     */
    public function setHomeTeam(HomeTeam $homeTeam = null)
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return HomeTeam
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set awayTeam
     *
     * @param AwayTeam $awayTeam
     *
     * @return $this
     */
    public function setAwayTeam(awayTeam $awayTeam = null)
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return AwayTeam
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }
}
