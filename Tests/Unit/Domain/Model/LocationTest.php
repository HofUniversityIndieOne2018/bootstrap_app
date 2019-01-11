<?php
namespace HofUniversity\BootstrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class LocationTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\BootstrapApp\Domain\Model\Location
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\BootstrapApp\Domain\Model\Location();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaxParticipantsReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMaxParticipants()
        );
    }

    /**
     * @test
     */
    public function setMaxParticipantsForIntSetsMaxParticipants()
    {
        $this->subject->setMaxParticipants(12);

        self::assertAttributeEquals(
            12,
            'maxParticipants',
            $this->subject
        );
    }
}
