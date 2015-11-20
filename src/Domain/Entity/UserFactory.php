<?php

/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/17/2015
 * Time: 6:17 PM
 */
namespace Notes\Domain\Entity;

use Notes\FactoryInterface;
use Notes\Domain\ValueObject\Uuid;

class UserFactory implements FactoryInterface
{
    /**
     * @return \Notes\Domain\Entity\UserGroup\User
     */
    public function create(){
        return new User(new Uuid());
    }
}
