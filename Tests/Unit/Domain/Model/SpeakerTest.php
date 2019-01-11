<?php
namespace HofUniversity\BootstrapApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SpeakerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \HofUniversity\BootstrapApp\Domain\Model\Speaker
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HofUniversity\BootstrapApp\Domain\Model\Speaker();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDegreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDegree()
        );
    }

    /**
     * @test
     */
    public function setDegreeForStringSetsDegree()
    {
        $this->subject->setDegree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'degree',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrganizationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrganization()
        );
    }

    /**
     * @test
     */
    public function setOrganizationForStringSetsOrganization()
    {
        $this->subject->setOrganization('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'organization',
            $this->subject
        );
    }
}
