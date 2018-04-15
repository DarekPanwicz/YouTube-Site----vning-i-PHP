<?php

namespace App\Repository;

use App\Entity\CategoryEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategoryEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryEntity[]    findAll()
 * @method CategoryEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryEntityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategoryEntity::class);
    }

    public function findHiddenCategories()
    {
        return $this ->findBy(
            [
                'hidden'=> null,
            ]
            );
    }

    public function findLetterCategories($letter)
    {
        return $this ->createQueryBuilder('c')
        ->where('c.name LIKE :letter')
        ->setParameter('letter',$letter. '%')
        ->getQuery()
        ->getResult();
          

    }

//    /**
//     * @return CategoryEntity[] Returns an array of CategoryEntity objects
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
    public function findOneBySomeField($value): ?CategoryEntity
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
