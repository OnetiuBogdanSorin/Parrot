<?php

namespace App\Repository;

use App\Entity\Subspecies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Subspecies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subspecies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subspecies[]    findAll()
 * @method Subspecies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubspeciesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subspecies::class);
    }

    // /**
    //  * @return Subspecies[] Returns an array of Subspecies objects
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
    public function findOneBySomeField($value): ?Subspecies
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
