<?php

namespace App\Repository;

use App\Entity\UrlAdress;
use DateTime;
use DateTimeImmutable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UrlAdress|null find($id, $lockMode = null, $lockVersion = null)
 * @method UrlAdress|null findOneBy(array $criteria, array $orderBy = null)
 * @method UrlAdress[]    findAll()
 * @method UrlAdress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UrlAdressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UrlAdress::class);
    }

    // /**
    //  * @return UrlAdress[] Returns an array of UrlAdress objects
    //  */

//    select last url from UrlAddress class
    /**
     * @throws NonUniqueResultException
     */
    public function findByUrl()
    {
        return $this->createQueryBuilder('u')
            ->select('u.url')
            ->orderBy('u.id', "DESC")
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * @throws \Doctrine\DBAL\Exception
     */
//    public function removeObject(int $xDaysAgo)
//    {
//        $qb = $this->getEntityManager()
//            ->getConnection()
//            ->createQueryBuilder()
//            ->delete('u.url');
//        //order them using created_at and then delete those seems better than looping throw all of them??
//        $qb->add('orderBy', $qb->expr()->in('created_at', $xDaysAgo));
//        $qb->execute();
//    }
    public function removeObject(int $xDaysAgo)
    {
//        $begin = new DateTimeImmutable('-5 days');
//        $end = new DateTimeImmutable('-6 days');

        //If you want to fix a day, you should use:
        $begin = (new DateTime('-5 days'))->setTime(0,0,0);
        $end = (new DateTime('-5 days'))->setTime(23,59,59);

        $qb = $this->getEntityManager()
            ->getConnection()
            ->createQueryBuilder()
            ->delete('someTable')
            ->where('createdAt between :end and :begin')
            ->setParameter('begin', $begin)
            ->setParameter('end', $end);
    }

    /*
    public function findOneBySomeField($value): ?UrlAdress
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
