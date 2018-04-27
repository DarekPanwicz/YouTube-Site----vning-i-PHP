<?php

namespace App\Repository;

use App\Entity\TicketEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TicketEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method TicketEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method TicketEntity[]    findAll()
 * @method TicketEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TicketEntity::class);
    }

//    /**
//     * @return TicketEntity[] Returns an array of TicketEntity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TicketEntity
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
