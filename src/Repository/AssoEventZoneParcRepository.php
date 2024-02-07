<?php

namespace App\Repository;

use App\Entity\AssoEventZoneParc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AssoEventZoneParc>
 *
 * @method AssoEventZoneParc|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssoEventZoneParc|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssoEventZoneParc[]    findAll()
 * @method AssoEventZoneParc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssoEventZoneParcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssoEventZoneParc::class);
    }

//    /**
//     * @return AssoEventZoneParc[] Returns an array of AssoEventZoneParc objects
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

//    public function findOneBySomeField($value): ?AssoEventZoneParc
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
