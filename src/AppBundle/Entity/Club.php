<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\OneToMany(targetEntity="Player", mappedBy="club")
     */
    private $players;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(name="emblem", type="text")
     */
    private $emblem;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", type="string", length=100)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="colours", type="string", length=100)
     */
    private $colours;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="text")
     */
    private $page;

    /**
     * @var string
     *
     * @ORM\Column(name="stadium", type="string", length=100)
     */
    private $stadium;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="string", length=100)
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="chairman", type="string", length=100)
     */
    private $chairman;

    /**
     * @var string
     *
     * @ORM\Column(name="coach", type="string", length=100)
     */
    private $coach;

    /**
     * @ORM\Column(name="longitude", type="decimal", precision=2, scale=1)
     */
    private $longitude;

    /**
     * @ORM\Column(name="latitude", type="decimal", precision=2, scale=1)
     */
    private $latitude;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new ArrayCollection();
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

    public function setEmblem($emblem)
    {
        $this->emblem = $emblem;

        return $this;
    }

    public function getEmblem()
    {
        return $this->emblem;
    }

    public function getWebPath()
    {
        return '/photo/' . $this->emblem;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set colours
     *
     * @param string $colours
     *
     * @return $this
     */
    public function setColours($colours)
    {
        $this->colours = $colours;

        return $this;
    }

    /**
     * Get colours
     *
     * @return string
     */
    public function getColours()
    {
        return $this->colours;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set page
     *
     * @param string $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set stadium
     *
     * @param string $stadium
     *
     * @return $this
     */
    public function setStadium($stadium)
    {
        $this->stadium = $stadium;

        return $this;
    }

    /**
     * Get stadium
     *
     * @return string
     */
    public function getStadium()
    {
        return $this->stadium;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set chairman
     *
     * @param string $chairman
     *
     * @return $this
     */
    public function setChairman($chairman)
    {
        $this->chairman = $chairman;

        return $this;
    }

    /**
     * Get chairman
     *
     * @return string
     */
    public function getChairman()
    {
        return $this->chairman;
    }

    /**
     * Set coach
     *
     * @param string $coach
     *
     * @return $this
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return string
     */
    public function getCoach()
    {
        return $this->coach;
    }


    /**
     * Add player
     *
     * @param Player $player
     *
     * @return $this
     */
    public function addPlayer(Player $player)
    {
        $this->players[] = $player;

        return $this;
    }

    /**
     * Remove player
     *
     * @param Player $player
     */
    public function removePlayer(Player $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return Collection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
