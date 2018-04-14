<?php

namespace App\Repository;

use App\Entity\CommentEnity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CommentEnity|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentEnity|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentEnity[]    findAll()
 * @method CommentEnity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentEnityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CommentEnity::class);
    }

//    /**
//     * @return CommentEnity[] Returns an array of CommentEnity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommentEnity
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
