<?php
namespace HofUniversity\BootstrapApp\Controller;


use HofUniversity\BootstrapApp\Domain\Repository\LocationRepository;
use HofUniversity\BootstrapApp\Domain\Repository\SessionRepository;

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
 * LocationController
 */
class LocationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * @var LocationRepository
     */
    protected $locationRepository;

    /**
     * @var SessionRepository
     */
    protected $sessionRepository;

    /**
     * @param LocationRepository $locationRepository
     */
    public function injectLocationRepository(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    /**
     * @param SessionRepository $sessionRepository
     */
    public function injectSessionRepository(SessionRepository $sessionRepository)
    {
        $this->sessionRepository = $sessionRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $locations = $this->locationRepository->findAll();
        $this->view->assign('locations', $locations);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $location
     * @return void
     */
    public function showAction(\HofUniversity\BootstrapApp\Domain\Model\Location $location)
    {
        $sessions = $this->sessionRepository->findByLocation($location);
        $this->view->assign('location', $location);
        $this->view->assign('sessions', $sessions);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $newLocation
     * @return void
     */
    public function createAction(\HofUniversity\BootstrapApp\Domain\Model\Location $newLocation)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->locationRepository->add($newLocation);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $location
     * @ignorevalidation $location
     * @return void
     */
    public function editAction(\HofUniversity\BootstrapApp\Domain\Model\Location $location)
    {
        $this->view->assign('location', $location);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $location
     * @return void
     */
    public function updateAction(\HofUniversity\BootstrapApp\Domain\Model\Location $location)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->locationRepository->update($location);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $location
     * @return void
     */
    public function deleteAction(\HofUniversity\BootstrapApp\Domain\Model\Location $location)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->locationRepository->remove($location);
        $this->redirect('list');
    }
}
