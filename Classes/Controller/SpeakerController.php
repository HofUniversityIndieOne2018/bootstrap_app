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
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * speakerRepository
     * 
     * @var \HofUniversity\BootstrapApp\Domain\Repository\SpeakerRepository
     * @inject
     */
    protected $speakerRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $speakers = $this->speakerRepository->findAll();
        $this->view->assign('speakers', $speakers);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker
     * @return void
     */
    public function showAction(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
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
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $newSpeaker
     * @return void
     */
    public function createAction(\HofUniversity\BootstrapApp\Domain\Model\Speaker $newSpeaker)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->add($newSpeaker);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker
     * @ignorevalidation $speaker
     * @return void
     */
    public function editAction(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker
     * @return void
     */
    public function updateAction(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->update($speaker);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker
     * @return void
     */
    public function deleteAction(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->remove($speaker);
        $this->redirect('list');
    }
}
