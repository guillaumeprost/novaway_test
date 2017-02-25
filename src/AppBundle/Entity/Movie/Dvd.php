<?php

namespace AppBundle\Entity\Movie;

use AppBundle\Entity\Movie;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Dvd
 * @package AppBundle\Entity\Movie
 *
 * @ORM\Entity()
 */
class Dvd extends Movie
{
    const DISCRIMINATOR = 'dvd';
}
