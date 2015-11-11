<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/8/2015
 * Time: 1:07 PM
 */
namespace Notes\Domain\Entity\UserGroup\Group;

use Notes\Domain\Entity\UserGroup\User;

class Owner extends User{

    /**
     * Owner constructor.
     */
    public function __construct()
    {
    }

    public function addNote($note)
    {

        return true;
    }

    public function editNote($noteId, $note)
    {

        return true;
    }

    public function deleteNote($noteId)
    {

        return true;
    }

    private function getNote($noteId)
    {

        return true;
    }

}
?>
