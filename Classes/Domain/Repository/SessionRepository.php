<?php
namespace HofUniversity\BootstrapApp\Domain\Repository;


use HofUniversity\BootstrapApp\Domain\Model\Location;
use HofUniversity\BootstrapApp\Domain\Model\Session;
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
 * The repository for Sessions
 */
class SessionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param Location $location
     * @return array|QueryResultInterface|Session[]
     */
    public function findByLocation(Location $location)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->equals('location', $location)
        );
        return $query->execute();
    }
}
