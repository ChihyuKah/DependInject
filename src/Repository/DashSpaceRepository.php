<?php

namespace App\Repository;

use App\Entity\DashSpace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DashSpace|null find($id, $lockMode = null, $lockVersion = null)
 * @method DashSpace|null findOneBy(array $criteria, array $orderBy = null)
 * @method DashSpace[]    findAll()
 * @method DashSpace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashSpaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DashSpace::class);
    }

    // /**
    //  * @return DashSpace[] Returns an array of DashSpace objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DashSpace
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
