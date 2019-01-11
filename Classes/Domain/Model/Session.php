<?php
namespace HofUniversity\BootstrapApp\Domain\Model;


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
 * Session
 */
class Session extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Start
     * 
     * @var \DateTime
     */
    protected $start = null;

    /**
     * End
     * 
     * @var \DateTime
     */
    protected $end = null;

    /**
     * Location
     * 
     * @var \HofUniversity\BootstrapApp\Domain\Model\Location
     */
    protected $location = null;

    /**
     * Speakers
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\BootstrapApp\Domain\Model\Speaker>
     * @cascade remove
     */
    protected $speakers = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->speakers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the start
     * 
     * @return \DateTime $start
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets the start
     * 
     * @param \DateTime $start
     * @return void
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
    }

    /**
     * Returns the end
     * 
     * @return \DateTime $end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets the end
     * 
     * @param \DateTime $end
     * @return void
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
    }

    /**
     * Returns the location
     * 
     * @return \HofUniversity\BootstrapApp\Domain\Model\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Location $location
     * @return void
     */
    public function setLocation(\HofUniversity\BootstrapApp\Domain\Model\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Adds a Speaker
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker
     * @return void
     */
    public function addSpeaker(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speaker)
    {
        $this->speakers->attach($speaker);
    }

    /**
     * Removes a Speaker
     * 
     * @param \HofUniversity\BootstrapApp\Domain\Model\Speaker $speakerToRemove The Speaker to be removed
     * @return void
     */
    public function removeSpeaker(\HofUniversity\BootstrapApp\Domain\Model\Speaker $speakerToRemove)
    {
        $this->speakers->detach($speakerToRemove);
    }

    /**
     * Returns the speakers
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\BootstrapApp\Domain\Model\Speaker> $speakers
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }

    /**
     * Sets the speakers
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HofUniversity\BootstrapApp\Domain\Model\Speaker> $speakers
     * @return void
     */
    public function setSpeakers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $speakers)
    {
        $this->speakers = $speakers;
    }
}
