<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Entity\Movie\Bluray;
use AppBundle\Entity\Movie\Dvd;
use AppBundle\Form\Type\BookType;
use AppBundle\Form\Type\Movie\BlurayType;
use AppBundle\Form\Type\Movie\DvdType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BackEndController
 * @package AppBundle\Controller
 *
 *
 * @Route("/admin")
 */
class BackEndController extends BaseController
{
    /**
     * @Route("/", name="admin-list")
     */
    public function indexAction()
    {
        $books  = $this->getEntityManager()->getRepository('AppBundle:Book')->findAll();
        $movies = $this->getEntityManager()->getRepository('AppBundle:Movie')->findAll();

        return $this->render(':back_end:index.html.twig', [
            'books'  => $books,
            'movies' => $movies
        ]);
    }

    /**
     * @param Request $request
     * @param string $id
     *
     * @Route("/edit-book/{id}", name="edit_book")
     * @Route("/create-book/", name="create_book")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editBookAction(Request $request, $id = null)
    {
        $edition = true;

        $book = $this->getEntityManager()->getRepository('AppBundle:Book')->findOneById($id);

        if ($book === null) {
            $book = new Book();
            $edition = false;
        }

        $form = $this->createForm(BookType::class, $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->persist($book);
            $this->getEntityManager()->flush();

            return $this->redirect($this->generateUrl(
                'admin-list'
            ));
        }

        return $this->render(':back_end:edit_book.html.twig', [
            'form'    => $form->createView(),
            'edition' => $edition
        ]);
    }

    /**
     * @param Book $book
     *
     * @Route("/delete-book/{id}", name="delete_book")
     * @ParamConverter("book", options={"mapping": {"id": "id"}, "repository_method" = "findOneById"})
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBookAction(Book $book)
    {
        $this->getEntityManager()->remove($book);
        $this->getEntityManager()->flush();

        return $this->redirect($this->generateUrl(
            'admin-list'
        ));
    }

    /**
     * @param Request $request
     * @param string|null $id
     *
     * @Route("/edit-dvd/{id}", name="edit_dvd")
     * @Route("/create-dvd/", name="create_dvd")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editDvdAction(Request $request, $id = null)
    {
        $edition = true;

        $movie = $this->getEntityManager()->getRepository('AppBundle:Movie\Dvd')->findOneById($id);

        if ($movie === null) {
            $movie   = new Dvd();
            $edition = false;
        }

        $form = $this->createForm(DvdType::class, $movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->persist($movie);
            $this->getEntityManager()->flush();

            return $this->redirect($this->generateUrl(
                'admin-list'
            ));
        }

        return $this->render(':back_end:edit_dvd.html.twig', [
            'form'    => $form->createView(),
            'edition' => $edition
        ]);
    }

    /**
     * @param Dvd $dvd
     *
     * @Route("/delete-dvd/{id}", name="delete_dvd")
     * @ParamConverter("dvd", options={"mapping": {"id": "id"}, "repository_method" = "findOneById"})
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteDvdAction(Dvd $dvd)
    {
        $this->getEntityManager()->remove($dvd);
        $this->getEntityManager()->flush();

        return $this->redirect($this->generateUrl(
            'admin-list'
        ));
    }

    /**
     * @param Request $request
     * @param string|null $id
     *
     * @Route("/edit-bluray/{id}", name="edit_bluray")
     * @Route("/create-bluray/", name="create_bluray")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editBlurayAction(Request $request, $id = null)
    {
        $edition = true;

        $movie = $this->getEntityManager()->getRepository('AppBundle:Movie\Bluray')->findOneById($id);

        if ($movie === null) {
            $movie   = new Bluray();
            $edition = false;

        }

        $form = $this->createForm(BlurayType::class, $movie);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->persist($movie);
            $this->getEntityManager()->flush();

            return $this->redirect($this->generateUrl(
                'admin-list'
            ));
        }

        return $this->render(':back_end:edit_bluray.html.twig', [
            'form'    => $form->createView(),
            'edition' => $edition
        ]);
    }

    /**
     * @param Bluray $bluray
     *
     * @Route("/delete-bluray/{id}", name="delete_bluray")
     * @ParamConverter("bluray", options={"mapping": {"id": "id"}, "repository_method" = "findOneById"})
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteBlurayAction(Bluray $bluray)
    {
        $this->getEntityManager()->remove($bluray);
        $this->getEntityManager()->flush();

        return $this->redirect($this->generateUrl(
            'admin-list'
        ));
    }
}
