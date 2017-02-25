<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\IdTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Movie
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discriminator", type="string")
 * @ORM\DiscriminatorMap({
 *     "dvd"    = "AppBundle\Entity\Movie\Dvd",
 *     "bluray" = "AppBundle\Entity\Movie\Bluray"
 * })
 */
abstract class Movie
{
    use IdTrait;

    /**
     * @var string
     * @Assert\NotNull()
     * @ORM\Column(type="string", nullable=false)
     */
    private $title;

    /**
     * @var string
     * @Assert\NotNull()
     * @ORM\Column(type="integer", nullable=false)
     */
    private $IsanNumber;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $director;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $releaseDate;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $time;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    /**
     * @var string
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $actors;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsanNumber()
    {
        return $this->IsanNumber;
    }

    /**
     * @param mixed $IsanNumber
     * @return $this
     */
    public function setIsanNumber($IsanNumber)
    {
        $this->IsanNumber = $IsanNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     * @return $this
     */
    public function setDirector($director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     * @return $this
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberPage()
    {
        return $this->numberPage;
    }

    /**
     * @param mixed $numberPage
     * @return $this
     */
    public function setNumberPage($numberPage)
    {
        $this->numberPage = $numberPage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     * @return $this
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
        return $this;
    }
}
