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
 * Speaker
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Degree
     * 
     * @var string
     */
    protected $degree = '';

    /**
     * First name
     * 
     * @var string
     */
    protected $firstName = '';

    /**
     * Last Name
     * 
     * @var string
     */
    protected $lastName = '';

    /**
     * E-Mail
     * 
     * @var string
     */
    protected $email = '';

    /**
     * Organization
     * 
     * @var string
     */
    protected $organization = '';

    /**
     * Returns the degree
     * 
     * @return string $degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     * 
     * @param string $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * Returns the firstName
     * 
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     * 
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     * 
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     * 
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the organization
     * 
     * @return string $organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets the organization
     * 
     * @param string $organization
     * @return void
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }
}
