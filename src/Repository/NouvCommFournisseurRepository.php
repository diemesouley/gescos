<?php

namespace App\Repository;

use App\Entity\NouvCommFournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NouvCommFournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method NouvCommFournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method NouvCommFournisseur[]    findAll()
 * @method NouvCommFournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouvCommFournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NouvCommFournisseur::class);
    }

    // /**
    //  * @return NouvCommFournisseur[] Returns an array of NouvCommFournisseur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NouvCommFournisseur
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
