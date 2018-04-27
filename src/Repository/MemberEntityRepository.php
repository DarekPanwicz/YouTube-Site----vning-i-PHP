<?php

namespace App\Repository;

use App\Entity\MemberEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MemberEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberEntity[]    findAll()
 * @method MemberEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MemberEntity::class);
    }

//    /**
//     * @return MemberEntity[] Returns an array of MemberEntity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MemberEntity
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
