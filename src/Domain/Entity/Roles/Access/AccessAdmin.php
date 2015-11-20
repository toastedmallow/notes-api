<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/19/2015
 * Time: 6:28 PM
 */

namespace Notes\Domain\Entity;


class AccessAdmin
{
    /** @var boolean */
    protected $create;
    /** @var boolean */
    protected $read;
    /** @var boolean */
    protected $update;
    /** @var boolean */
    protected $delete;

    /**
     * AccessOwner constructor.
     * @param bool $create
     * @param bool $read
     * @param bool $update
     * @param bool $delete
     */
    public function __construct($create, $read, $update, $delete)
    {
        $this->create = $create;
        $this->read = $read;
        $this->update = $update;
        $this->delete = $delete;
    }


    /**
     * @return boolean
     */
    public function isCreate()
    {
        return $this->create;
    }

    /**
     * @param boolean $create
     */
    public function setCreate($create)
    {
        $this->create = $create;
    }

    /**
     * @return boolean
     */
    public function isRead()
    {
        return $this->read;
    }

    /**
     * @param boolean $read
     */
    public function setRead($read)
    {
        $this->read = $read;
    }

    /**
     * @return boolean
     */
    public function isUpdate()
    {
        return $this->update;
    }

    /**
     * @param boolean $update
     */
    public function setUpdate($update)
    {
        $this->update = $update;
    }

    /**
     * @return boolean
     */
    public function isDelete()
    {
        return $this->delete;
    }

    /**
     * @param boolean $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

}
