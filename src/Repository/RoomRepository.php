<?php

namespace App\Repository;

use App\Entity\Room;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Room|null find($id, $lockMode = null, $lockVersion = null)
 * @method Room|null findOneBy(array $criteria, array $orderBy = null)
 * @method Room[]    findAll()
 * @method Room[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Room::class);
    }


    /**
     * @return int|mixed|string
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function countAllRoom(): mixed
    {
        $queryBuilder = $this->createQueryBuilder('r');
        $queryBuilder->select('COUNT(r.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
}
