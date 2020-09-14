<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findForList($filter)
    {
        $qb = $this
            ->createQueryBuilder('user')
            ->select('user')
            ->addOrderBy('user.registeredAt', 'DESC')
        ;

        return $qb->getQuery()->getResult();
    }
}
