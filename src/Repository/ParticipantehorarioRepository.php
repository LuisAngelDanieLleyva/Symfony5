<?php

namespace App\Repository;

use App\Entity\Participantehorario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Participantehorario|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participantehorario|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participantehorario[]    findAll()
 * @method Participantehorario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipantehorarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participantehorario::class);
    }

    // /**
    //  * @return Participantehorario[] Returns an array of Participantehorario objects
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
    public function findOneBySomeField($value): ?Participantehorario
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
