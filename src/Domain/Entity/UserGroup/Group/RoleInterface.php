<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/10/2015
 * Time: 6:56 PM
 */

namespace Notes\Domain\Entity\UserGroup\Group;
interface RoleInterface
{
    public function Create();
    public function Read();
    public function Update();
    public function Delete();

}

?>
