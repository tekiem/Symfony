<?php

namespace Kevin\PlatformBundle\Repository;

/**
 * ApplicationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApplicationRepository extends \Doctrine\ORM\EntityRepository
{
	public function getApplicationsWithAdvert($limit)
	{
		$qb = $this->createQueryBuilder('a');

		// On fait une jointure avec l'entité Advert avec pour alias « adv »
		$qb
		  ->innerJoin('a.advert', 'adv')
		  ->addSelect('adv')
		;

		// Puis on ne retourne que $limit résultats
		$qb->setMaxResults($limit);

		// Enfin, on retourne le résultat
		return $qb
		  ->getQuery()
		  ->getResult()
		  ;
	}
}
