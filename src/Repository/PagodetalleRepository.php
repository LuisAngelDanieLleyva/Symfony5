<?php

namespace App\Repository;

use App\Entity\Pagodetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Pagodetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pagodetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pagodetalle[]    findAll()
 * @method Pagodetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagodetalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pagodetalle::class);
    }

    // /**
    //  * @return Pagodetalle[] Returns an array of Pagodetalle objects
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
    public function findOneBySomeField($value): ?Pagodetalle
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
