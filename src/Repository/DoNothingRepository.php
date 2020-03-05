<?php

namespace App\Repository;

use App\Entity\DoNothing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DoNothing|null find($id, $lockMode = null, $lockVersion = null)
 * @method DoNothing|null findOneBy(array $criteria, array $orderBy = null)
 * @method DoNothing[]    findAll()
 * @method DoNothing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoNothingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoNothing::class);
    }

    // /**
    //  * @return DoNothing[] Returns an array of DoNothing objects
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
    public function findOneBySomeField($value): ?DoNothing
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
