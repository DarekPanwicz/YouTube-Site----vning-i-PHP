<?php

namespace App\Repository;

use App\Entity\UserEnity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserEnity|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserEnity|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserEnity[]    findAll()
 * @method UserEnity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserEnityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserEnity::class);
    }

//    /**
//     * @return UserEnity[] Returns an array of UserEnity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserEnity
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
