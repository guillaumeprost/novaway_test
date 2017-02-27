<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Entity\Movie;
use AppBundle\Form\Model\SearchModel;
use AppBundle\Form\Type\SearchType;
use AppBundle\Manager\SearchManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SearchController
 * @package AppBundle\Controller
 *
 */
class SearchController extends BaseController
{
    /**
     * @var SearchManager
     */
    private $searchManager;

    /**
     * @return SearchManager|object
     */
    private function getSearchManager()
    {
        if (!$this->searchManager instanceof SearchManager) {
            $this->searchManager = $this->get('app.manager.search');
        }

        return $this->searchManager;
    }

    /**
     * @Route("/", name="search")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(SearchType::class, new SearchModel());

        $form->handleRequest($request);

        $results     = null;
        $lastArticles = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $results = $this->getSearchManager()->handleSearch($form->getData());
        } else {
            $lastArticles = $this->getSearchManager()->getLastArticles();
        }

        return $this->render(':search:index.html.twig', [
            'form'          => $form->createView(),
            'lastArticles'  => $lastArticles,
            'searchResults' => $results
        ]);
    }

    /**
     * @param Book $book
     *
     * @Route("/show-book/{id}", name="show_book")
     * @ParamConverter("book", options={"mapping": {"id": "id"}, "repository_method" = "findOneById"})
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function showBook(Book $book)
    {
        return $this->render(':search:show-book.html.twig', [
            'book' => $book
        ]);
    }

    /**
     * @param Movie $movie
     *
     * @Route("/show-movie/{id}", name="show_movie")
     * @ParamConverter("movie", options={"mapping": {"id": "id"}, "repository_method" = "findOneById"})
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function showMovie(Movie $movie)
    {
        return $this->render(':search:show-movie.html.twig', [
            'movie' => $movie
        ]);
    }
}
