<?php

namespace App\Repository;

use App\Entity\Videos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Knp\Component\Pager\PaginatorInterface;


/**
 * @method Videos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Videos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Videos[]    findAll()
 * @method Videos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Videos::class);
        $this->paginator = $paginator;

    }

    public function findByChildIds(array $id, $page, ?string $sort_method){

        if($sort_method != 'rating')
        {
            $dbquery = $this ->createQueryBuilder('v')
                ->andWhere('v.category IN (:val)')
                ->leftJoin('v.comments', 'c')
                ->leftJoin('v.usersRate','r')
                ->addSelect('c','r')
                ->setParameter('val', $id)
                ->orderBy('v.title', $sort_method);
        }
        else{

            $dbquery = $this ->createQueryBuilder('v')
                ->addSelect('COUNT(r) AS HIDDEN rates')
                ->leftJoin('v.usersRate', 'r')
                ->andWhere('v.category IN (:val)')
                ->setParameter('val', $id)
                ->groupBy('v')
                ->orderBy('rates', 'DESC');


        }

        $dbquery->getQuery();


        $pagination = $this->paginator->paginate($dbquery, $page, Videos::perPage);
        return $pagination;
    }
    // /**
    //  * @return Videos[] Returns an array of Videos objects
    //  */

    public function findByTitle(string $query, int $page, ?string $sort_method)
    {

        $querybuilder = $this->createQueryBuilder('v');
        $searchTerms = $this->prepareQuery($query);

        foreach ($searchTerms as $key => $term)
        {
            $querybuilder
                ->orWhere('v.title LIKE :t_'.$key)
                ->setParameter('t_'.$key, '%'.trim($term).'%');
        }
        if($sort_method != 'rating')
        {
            $dbquery =  $querybuilder
                ->orderBy('v.title', $sort_method)
                ->leftJoin('v.comments', 'c')
                ->leftJoin('v.usersRate','r')
                ->addSelect('c', 'r');
        }
        else{

            $dbquery = $this ->createQueryBuilder('v')
                ->addSelect('COUNT(r) AS HIDDEN rates', 'c')
                ->leftJoin('v.usersRate', 'r')
                ->leftJoin('v.comments', 'c')
                ->groupBy('v','c')
                ->orderBy('rates', 'DESC');

        }
        $dbquery->getQuery();


        return $this->paginator->paginate($dbquery, $page, Videos::perPage);
    }

    public function videoDetails($id)
    {
        return $this->createQueryBuilder('v')
            ->leftJoin('v.comments', 'c')
            ->leftJoin('c.user', 'u')
            ->addSelect('c', 'u')
            ->where('v.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getTopRatedVideo()
    {
        $sql = "SELECT v.id, v.title, v.path, v.user_id, v.duration, u.name, u.last_name, COUNT(*) AS rates FROM rates r JOIN videos v ON v.id = r.videos_id JOIN users u ON u.id = v.user_id GROUP BY r.videos_id ORDER BY `rates` DESC";

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    private function prepareQuery(string $query): array
    {
        $terms = array_unique(explode(' ',$query));
        return array_filter($terms, function ($terms){
            return 2<= mb_strlen($terms);
    });
    }



    /*
    public function findOneBySomeField($value): ?Videos
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
