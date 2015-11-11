<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/8/2015
 * Time: 1:07 PM
 */
namespace Notes\Domain\Entity\UserGroup\Group;

use Notes\Domain\Entity\UserGroup\User;

class Admin extends User{

    /**
     * @var boolean
     */
    protected $addUser;
    /**
     * @var boolean
     */
    protected $removeUser;
    /**
     * @var boolean
     */
    protected $removeNote;
    /**
     * @var boolean
     */
    protected $editNotes;

    /**
     * Admin constructor.
     * @param bool $addUser
     * @param bool $removeUser
     * @param bool $removeNote
     * @param bool $editNotes
     */
    public function __construct($addUser, $removeUser, $removeNote, $editNotes)
    {
        $this->addUser = $addUser;
        $this->removeUser = $removeUser;
        $this->removeNote = $removeNote;
        $this->editNotes = $editNotes;
    }

    /**
     * @return boolean
     */
    public function isAddUser()
    {
        return $this->addUser;
    }

    /**
     * @param boolean $addUser
     */
    public function setAddUser($addUser)
    {
        $this->addUser = $addUser;
    }

    /**
     * @return boolean
     */
    public function isRemoveUser()
    {
        return $this->removeUser;
    }

    /**
     * @param boolean $removeUser
     */
    public function setRemoveUser($removeUser)
    {
        $this->removeUser = $removeUser;
    }

    /**
     * @return boolean
     */
    public function isRemoveNote()
    {
        return $this->removeNote;
    }

    /**
     * @param boolean $removeNote
     */
    public function setRemoveNote($removeNote)
    {
        $this->removeNote = $removeNote;
    }

    /**
     * @return boolean
     */
    public function isEditNotes()
    {
        return $this->editNotes;
    }

    /**
     * @param boolean $editNotes
     */
    public function setEditNotes($editNotes)
    {
        $this->editNotes = $editNotes;
    }

    public function addUser()
    {
        return new User();
    }
    public function removeNote()
    {
        return true;
    }
    public function editNote()
    {
        return true;
    }
    public function removeUser()
    {
        return true;
    }

}
?>
