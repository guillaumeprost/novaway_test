<?php

namespace AppBundle\Entity\Repositories;

use AppBundle\Form\Model\SearchModel;
use Doctrine\ORM\EntityRepository;

/**
 * Class MovieRepository
 * @package AppBundle\Entity\Repositories
 */
class MovieRepository extends EntityRepository
{
    /**
     * @param SearchModel $searchModel
     * @return array
     */
    public function findForSearch(SearchModel $searchModel)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.isanNumber like :searchInput')
            ->orWhere('m.director like :searchInput')
            ->orWhere('m.title like :searchInput');
        $qb->setParameter('searchInput', '%' . $searchModel->getSearchInput() . '%');

        return $qb->getQuery()->getResult();
    }

    /**
     * @param int $number
     * @return array
     */
    public function findLasts($number = 5)
    {
        $qb = $this->createQueryBuilder('m');
        $qb->orderBy('m.createdAt');
        $qb->setMaxResults($number);

        return $qb->getQuery()->getResult();
    }
}
