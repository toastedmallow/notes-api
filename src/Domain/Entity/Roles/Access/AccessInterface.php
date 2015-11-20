<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/19/2015
 * Time: 6:22 PM
 */

namespace Notes\Domain\Entity;


interface AccessInterface
{
    public function isCreate();
    public function isUpdate();
    public function isRead();
    public function isDelete();
}
