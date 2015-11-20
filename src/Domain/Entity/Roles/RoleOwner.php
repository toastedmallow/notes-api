<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/19/2015
 * Time: 6:05 PM
 */

namespace Notes\Domain\Entity;

class RoleOwners implements RoleInterface
{
    /** @var int */
    protected $userId;
    /** @var string */
    protected $roleName;
    /** @var int */
    protected $roleInterfaceId;
    /** @var int */
    protected $id;

    /**
     * RoleAdmins constructor.
     * @param int $userId
     * @param string $roleName
     * @param int $roleInterfaceId
     * @param int $id
     */
    public function __construct($userId, $roleName, $roleInterfaceId, $id)
    {
        $this->userId = $userId;
        $this->roleName = $roleName;
        $this->roleInterfaceId = $roleInterfaceId;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }

    /**
     * @return int
     */
    public function getRoleInterfaceId()
    {
        return $this->roleInterfaceId;
    }

    /**
     * @param int $roleInterfaceId
     */
    public function setRoleInterfaceId($roleInterfaceId)
    {
        $this->roleInterfaceId = $roleInterfaceId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
