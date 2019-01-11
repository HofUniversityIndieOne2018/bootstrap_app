<?php
namespace HofUniversity\BootstrapApp\Tests\Unit\Controller;

/**
 * Test case.
 */
class SessionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\BootstrapApp\Controller\SessionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\HofUniversity\BootstrapApp\Controller\SessionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSessionsFromRepositoryAndAssignsThemToView()
    {

        $allSessions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sessionRepository = $this->getMockBuilder(\HofUniversity\BootstrapApp\Domain\Repository\SessionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sessionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSessions));
        $this->inject($this->subject, 'sessionRepository', $sessionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sessions', $allSessions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSessionToView()
    {
        $session = new \HofUniversity\BootstrapApp\Domain\Model\Session();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('session', $session);

        $this->subject->showAction($session);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSessionToSessionRepository()
    {
        $session = new \HofUniversity\BootstrapApp\Domain\Model\Session();

        $sessionRepository = $this->getMockBuilder(\HofUniversity\BootstrapApp\Domain\Repository\SessionRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionRepository->expects(self::once())->method('add')->with($session);
        $this->inject($this->subject, 'sessionRepository', $sessionRepository);

        $this->subject->createAction($session);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSessionToView()
    {
        $session = new \HofUniversity\BootstrapApp\Domain\Model\Session();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('session', $session);

        $this->subject->editAction($session);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSessionInSessionRepository()
    {
        $session = new \HofUniversity\BootstrapApp\Domain\Model\Session();

        $sessionRepository = $this->getMockBuilder(\HofUniversity\BootstrapApp\Domain\Repository\SessionRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionRepository->expects(self::once())->method('update')->with($session);
        $this->inject($this->subject, 'sessionRepository', $sessionRepository);

        $this->subject->updateAction($session);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSessionFromSessionRepository()
    {
        $session = new \HofUniversity\BootstrapApp\Domain\Model\Session();

        $sessionRepository = $this->getMockBuilder(\HofUniversity\BootstrapApp\Domain\Repository\SessionRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $sessionRepository->expects(self::once())->method('remove')->with($session);
        $this->inject($this->subject, 'sessionRepository', $sessionRepository);

        $this->subject->deleteAction($session);
    }
}
