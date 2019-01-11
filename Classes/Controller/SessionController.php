<?php
namespace HofUniversity\BootstrapApp\Controller;


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
 * SessionController
 */
class SessionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sessionRepository
     * 
     * @var \HofUniversity\BootstrapApp\Domain\Repository\SessionRepository
     * @inject
     */
    protected $sessionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sessions = $this->sessionRepository->findAll();
        $this->view->assign('sessions', $sessions);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Session $session
     * @return void
     */
    public function showAction(\HofUniversity\BootstrapApp\Domain\Model\Session $session)
    {
        $this->view->assign('session', $session);
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
     * @param \HofUniversity\BootstrapApp\Domain\Model\Session $newSession
     * @return void
     */
    public function createAction(\HofUniversity\BootstrapApp\Domain\Model\Session $newSession)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sessionRepository->add($newSession);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Session $session
     * @ignorevalidation $session
     * @return void
     */
    public function editAction(\HofUniversity\BootstrapApp\Domain\Model\Session $session)
    {
        $this->view->assign('session', $session);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Session $session
     * @return void
     */
    public function updateAction(\HofUniversity\BootstrapApp\Domain\Model\Session $session)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sessionRepository->update($session);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Session $session
     * @return void
     */
    public function deleteAction(\HofUniversity\BootstrapApp\Domain\Model\Session $session)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sessionRepository->remove($session);
        $this->redirect('list');
    }
}
