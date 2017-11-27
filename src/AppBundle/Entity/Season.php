<?php

namespace AppBundle\Entity;

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
}

