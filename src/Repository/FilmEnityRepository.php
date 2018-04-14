<?php

namespace App\Repository;

use App\Entity\FilmEnity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FilmEnity|null find($id, $lockMode = null, $lockVersion = null)
 * @method FilmEnity|null findOneBy(array $criteria, array $orderBy = null)
 * @method FilmEnity[]    findAll()
 * @method FilmEnity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmEnityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FilmEnity::class);
    }

//    /**
//     * @return FilmEnity[] Returns an array of FilmEnity objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FilmEnity
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
