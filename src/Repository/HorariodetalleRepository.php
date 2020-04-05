<?php

namespace App\Repository;

use App\Entity\Horariodetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Horariodetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Horariodetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Horariodetalle[]    findAll()
 * @method Horariodetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorariodetalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Horariodetalle::class);
    }

    // /**
    //  * @return Horariodetalle[] Returns an array of Horariodetalle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Horariodetalle
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
