<?php

namespace AppBundle\Entity\Movie;

use AppBundle\Entity\Movie;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Bluray
 * @package AppBundle\Entity\Movie
 *
 * @ORM\Entity()
 */
class Bluray extends Movie
{
    const DISCRIMINATOR = 'bluray';
}
