<?php

namespace Notes\Domain\Entity\UserGroup;

/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/7/2015
 * Time: 6:42 PM
 */

class User implements UserGroupInterface{
    /** @var string */
    protected $firstName;
    /** @var string */
    protected $lastName;
    /** @var string */
    protected $userName;
    /** @var string */
    protected $email;
    /** @var boolean */
    protected $adminAccess;
    /** @var boolean */
    protected $ownerAccess;

    /**
     * User constructor.
     * @param string $firstName
     * @param string $lastName
     * @param string $userName
     * @param string $email
     * @param bool $adminAccess
     * @param bool $ownerAccess
     */
    public function __construct($firstName, $lastName, $userName, $email, $adminAccess, $ownerAccess)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->adminAccess = $adminAccess;
        $this->ownerAccess = $ownerAccess;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function getAdminAccess()
    {
        return $this->adminAccess;
    }

    /**
     * @param boolean $adminAccess
     */
    public function setAdminAccess($adminAccess)
    {
        $this->adminAccess = $adminAccess;
    }

    /**
     * @return boolean
     */
    public function getOwnerAccess()
    {
        return $this->ownerAccess;
    }

    /**
     * @param boolean $ownerAccess
     */
    public function setOwnerAccess($ownerAccess)
    {
        $this->ownerAccess = $ownerAccess;
    }

    public function getName()
    {
        $name = $this->firstName . ' ' . $this->lastName;
        return $name;
    }

};
?>
