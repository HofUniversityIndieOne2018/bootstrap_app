<?php
namespace HofUniversity\BootstrapApp\Domain\Repository;


use HofUniversity\BootstrapApp\Domain\Model\Location;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

/***
 *
 * This file is part of the "BootstrapApp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * The repository for Locations
 */
class LocationRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $searchTerm
     * @return array|QueryResultInterface|Location[]
     */
    public function findBySearchTerm(string $searchTerm)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->like('title', '%' . $searchTerm . '%')
        );
        $result = $query->execute();
        return $result;
    }
}
