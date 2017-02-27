<?php

namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SearchModel
 * @package AppBundle\Form\Model
 */
class SearchModel
{
    /**
     * @var string
     * @Assert\NotNull(message="Remplissez ce champs pour faire une recherche")
     */
    private $searchInput;

    /**
     * @return string
     */
    public function getSearchInput()
    {
        return $this->searchInput;
    }

    /**
     * @param string $searchInput
     * @return $this
     */
    public function setSearchInput($searchInput)
    {
        $this->searchInput = $searchInput;
        return $this;
    }
}
