<?php

namespace App\Repository;

use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Location>
 *
 * @method Location|null find($id, $lockMode = null, $lockVersion = null)
 * @method Location|null findOneBy(array $criteria, array $orderBy = null)
 * @method Location[]    findAll()
 * @method Location[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Location::class);
    }

      /**
     * @return string[] Returns an array of distinct city names
     */
    public function findAllCities(): array
    {
        $result = $this->createQueryBuilder('l')
            ->select('DISTINCT l.city')
            ->getQuery()
            ->getResult();

        return array_column($result, 'city');
    }

    public function findById(string $id): ?string 
    {
        $result = $this->createQueryBuilder('l')
        ->select('l.city') // Select only the city field from the location alias 'l'
        ->where('l.id = :id') // Add a where clause to filter by the id
        ->setParameter('id', $id) // Set the id parameter
        ->getQuery()
        ->getOneOrNullResult(); // Get one result or null if not found

        // Since we expect at most one result, we don't need array_column.
        // Instead, return the 'city' directly if a result is found.
        return $result ? $result['city'] : null;
    }


    // public function getIdByName($city)
    // {
    //     $qb = $this->createQueryBuilder('m');
    //     $qb->select('m.id')->where('m.city = :city')->setParameter('city', $city);
    //     $query = $qb->getQuery();
    //     $result = $query->getOneOrNullResult(); 
    //     return $result;
    // }

//    /**
//     * @return Location[] Returns an array of Location objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Location
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
