<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 */
class Player
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
     * @ORM\ManyToOne(targetEntity="Club", inversedBy="players")
     * @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     */
    private $club;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=10)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="string", length=50)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="growth", type="string", length=50, nullable=true)
     */
    private $growth;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=50, nullable=true)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="previous_club", type="string", length=100)
     */
    private $previousClub;


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
     * Set name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set position
     *
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set growth
     *
     * @param string $growth
     *
     * @return $this
     */
    public function setGrowth($growth)
    {
        $this->growth = $growth;

        return $this;
    }

    /**
     * Get growth
     *
     * @return string
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set previousClub
     *
     * @param string $previousClub
     *
     * @return $this
     */
    public function setPreviousClub($previousClub)
    {
        $this->previousClub = $previousClub;

        return $this;
    }

    /**
     * Get previousClub
     *
     * @return string
     */
    public function getPreviousClub()
    {
        return $this->previousClub;
    }

    /**
     * Set club
     *
     * @param Club $club
     *
     * @return $this
     */
    public function setClub(Club $club = null)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * Get club
     *
     * @return Club
     */
    public function getClub()
    {
        return $this->club;
    }
}
