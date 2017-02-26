<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Traits\IdTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Book
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 */
class Book
{
    use IdTrait;

    /**
     * @var string
     * @Assert\NotNull()
     * @ORM\Column(type="integer", nullable=false)
     */
    private $isnbNumber;

    /**
     * @var string
     * @Assert\NotNull()
     * @ORM\Column(type="string", nullable=false)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $author;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $parutionDate;

    /**
     * @var string
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberPage;

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
     * @return string
     */
    public function getIsnbNumber()
    {
        return $this->isnbNumber;
    }

    /**
     * @param string $isnbNumber
     * @return $this
     */
    public function setIsnbNumber($isnbNumber)
    {
        $this->isnbNumber = $isnbNumber;
        return $this;
    }

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
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParutionDate()
    {
        return $this->parutionDate;
    }

    /**
     * @param mixed $parutionDate
     * @return $this
     */
    public function setParutionDate($parutionDate)
    {
        $this->parutionDate = $parutionDate;
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
}
