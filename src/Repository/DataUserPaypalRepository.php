<?php

namespace App\Repository;

use App\Entity\DataUserPaypal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DataUserPaypal>
 *
 * @method DataUserPaypal|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataUserPaypal|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataUserPaypal[]    findAll()
 * @method DataUserPaypal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataUserPaypalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataUserPaypal::class);
    }

    public function save(DataUserPaypal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DataUserPaypal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DataUserPaypal[] Returns an array of DataUserPaypal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DataUserCB
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
