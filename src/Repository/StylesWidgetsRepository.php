<?php

namespace App\Repository;

use App\Entity\StylesWidgets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StylesWidgets|null find($id, $lockMode = null, $lockVersion = null)
 * @method StylesWidgets|null findOneBy(array $criteria, array $orderBy = null)
 * @method StylesWidgets[]    findAll()
 * @method StylesWidgets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StylesWidgetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StylesWidgets::class);
    }

    // /**
    //  * @return StylesWidgets[] Returns an array of StylesWidgets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StylesWidgets
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
