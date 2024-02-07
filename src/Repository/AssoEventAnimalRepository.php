<?php

namespace App\Repository;

use App\Entity\AssoEventAnimal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AssoEventAnimal>
 *
 * @method AssoEventAnimal|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssoEventAnimal|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssoEventAnimal[]    findAll()
 * @method AssoEventAnimal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssoEventAnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssoEventAnimal::class);
    }

//    /**
//     * @return AssoEventAnimal[] Returns an array of AssoEventAnimal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AssoEventAnimal
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
