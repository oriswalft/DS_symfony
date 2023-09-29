<?php

namespace App\Repository;

use App\Entity\Projections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projections>
 *
 * @method Projections|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projections|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projections[]    findAll()
 * @method Projections[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projections::class);
    }

//    /**
//     * @return Projections[] Returns an array of Projections objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Projections
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
