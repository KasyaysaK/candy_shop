<?php

namespace App\Repository;

use App\Entity\Swimsuit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Swimsuit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Swimsuit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Swimsuit[]    findAll()
 * @method Swimsuit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SwimsuitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Swimsuit::class);
    }

    /**
     * @return Query
     */
    public function findAllVisibleQuery(SwimsuitSearch $search): Query
    {
        $query = $this->findVisibleQuery();
        return $query->getQuery();
    }

    /**
     * @return Swimsuit[]
     */
    public function findLatest() : array
    {
        return $this->findVisibleQuery()
                    ->setMaxResults(4)
                    ->getQuery()
                    ->getResult()
        ;
    }

    private function findVisibleQuery()
    {
        return $this->createQueryBuilder('p')
        ;
    }

    // /**
    //  * @return Swimsuit[] Returns an array of Swimsuit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Swimsuit
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
