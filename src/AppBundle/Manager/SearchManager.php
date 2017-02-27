<?php

namespace AppBundle\Manager;
use AppBundle\Form\Model\SearchModel;
use Doctrine\ORM\EntityManager;

/**
 * Class SearchManager
 * @package AppBundle\Manager
 */
class SearchManager
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * SearchManager constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param SearchModel $searchModel
     * @return array
     */
    public function handleSearch(SearchModel $searchModel)
    {
        $books  = $this->entityManager->getRepository('AppBundle:Book')->findForSearch($searchModel);
        $movies = $this->entityManager->getRepository('AppBundle:Movie')->findForSearch($searchModel);

        return [
            'books'  => $books,
            'movies' => $movies
        ];
    }

    /**
     * @return array
     */
    public function getLastArticles()
    {
        $books  = $this->entityManager->getRepository('AppBundle:Book')->findLasts();
        $movies = $this->entityManager->getRepository('AppBundle:Movie')->findLasts();

        return [
            'books'  => $books,
            'movies' => $movies
        ];
    }
}