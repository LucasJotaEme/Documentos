<?php

namespace App\Repository;

use App\Entity\DocumentoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DocumentoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentoTipo[]    findAll()
 * @method DocumentoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentoTipoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocumentoTipo::class);
    }

    // /**
    //  * @return DocumentoTipo[] Returns an array of DocumentoTipo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocumentoTipo
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
