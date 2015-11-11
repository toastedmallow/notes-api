<?php
/**
 * File name: UserGroupInterface.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @package   Notes\Domain\Entity\UserGroup
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Notes\Domain\Entity\UserGroup;
interface UserGroupInterface
{
    public function getFirstName();
    public function getLastName();
    public function getUserName();
    public function getAdminAccess();
    public function getOwnerAccess();
}

?>
