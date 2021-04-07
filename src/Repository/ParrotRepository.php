<?php

namespace App\Repository;

use App\Entity\Parrot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Parrot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parrot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parrot[]    findAll()
 * @method Parrot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParrotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parrot::class);
    }

    // /**
    //  * @return Parrot[] Returns an array of Parrot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Parrot
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
