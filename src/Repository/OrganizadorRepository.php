<?php

namespace App\Repository;

use App\Entity\Organizador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Organizador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organizador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Organizador[]    findAll()
 * @method Organizador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganizadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Organizador::class);
    }

    // /**
    //  * @return Organizador[] Returns an array of Organizador objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Organizador
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
