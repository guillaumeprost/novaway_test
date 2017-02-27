<?php

namespace AppBundle\Entity\Repositories;

use AppBundle\Form\Model\SearchModel;
use Doctrine\ORM\EntityRepository;

/**
 * Class BookRepository
 * @package AppBundle\Entity\Repositories
 */
class BookRepository extends EntityRepository
{
    /**
     * @param SearchModel $searchModel
     * @return array
     */
    public function findForSearch(SearchModel $searchModel)
    {
        $qb = $this->createQueryBuilder('b');
        $qb->where('b.isnbNumber like :searchInput')
            ->orWhere('b.author like :searchInput')
            ->orWhere('b.title like :searchInput');
        $qb->setParameter('searchInput', '%'.$searchModel->getSearchInput().'%');

        return $qb->getQuery()->getResult();
    }

    /**
     * @param int $number
     * @return array
     */
    public function findLasts($number = 5)
    {
        $qb = $this->createQueryBuilder('b');
        $qb->orderBy('b.createdAt');
        $qb->setMaxResults($number);

        return $qb->getQuery()->getResult();
    }
}
