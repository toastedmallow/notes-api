<?php

/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/19/2015
 * Time: 5:59 PM
 */
namespace Notes\Domain\Entity;
interface RoleInterface
{
    public function getUserId();
    public function getRoleName();
    public function getRoleInterfaceId();
    public function getId();
}
