<?php

/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/17/2015
 * Time: 6:46 PM
 */
namespace Notes\Persistence\Entity;

use InvalidArgumentException;
use Notes\Domain\Entity\UserGroup\User;
use Notes\Domain\Entity\UserGroup\UserRepositoryInterface;

class InMemoryUserRepository implements UserRepositoryInterface
{
    /** @var array */
    protected $users;

    /**
     * InMemoryUserRepository constructor
     */
    public function __construct()
    {
        $this->users = [];
    }

    /**
     * @param \Notes\Domain\Entity\UserGroup\User $user
     * @return mixed
     */
    public function add(User $user)
    {
        if (!$user instanceof User) {
            throw new InvalidArgumentException(
                __METHOD__ . '(): $user has to be a User object'
            );
        }

        $this->users[] = $user;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->users);
    }

    /**
     * @param $username
     * @return mixed
     */
    public function getByUsername($username)
    {
        $results = [];

        foreach($this->users as $user) {
            /** @var \Notes\Domain\Entity\User $user*/
            if ($user->getUsername()->__toString() === $username) {
                $results[] = $user;
            }
        }

        if ($this->count() == 1) {
            return $results[0];
        }

        return $results;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param $username
     * @return mixed
     */
    public function remove(User $username)
    {
        $results = [];

        foreach($this->users as $user) {
            /** @var \Notes\Domain\Entity\User $user*/
            if ($user->getUsername()->__toString() === $username->__toString()) {
                $results[] = $user;
            }
        }

        if ($this->count() == 1) {
            return $results[0];
        }

        return $results;
    }


    /**
     * @param $username
     * @return mixed
     */
    public function removeByUsername($username)
    {
        foreach($this->users as $i => $user) {
            /** @var \Notes\Domain\Entity\User $user*/
            if ($user->getUsername()->__toString() === $username->__toString()) {
                unset($this->users[$i]);
                return true;
            }
        }

        return false;
    }
}
