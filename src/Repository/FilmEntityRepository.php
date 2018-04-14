<?php

namespace App\Repository;

use App\Entity\FilmEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FilmEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method FilmEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method FilmEntity[]    findAll()
 * @method FilmEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FilmEntity::class);
    }

//    /**
//     * @return FilmEntity[] Returns an array of FilmEntity objects
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
    public function findOneBySomeField($value): ?FilmEntity
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
