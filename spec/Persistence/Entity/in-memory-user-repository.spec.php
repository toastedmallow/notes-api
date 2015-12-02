<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 12/1/2015
 * Time: 6:21 PM
 */

use Notes\Domain\Entity\UserFactory;
use Notes\Domain\ValueObject\StringLiteral;
use Notes\Persistence\Entity\InMemoryUserRepository;

describe('Notes\Persistence\Entity\InMemoryUserRepository', function () {
    beforeEach(function () {
        $this->repo = new InMemoryUserRepository();
        $this->userFactory = new UserFactory();
    });

    describe('->__construct()', function () {
        it('should construct an InMemoryUserRepository object', function () {
            expect($this->repo)->to->be->instanceof(
                'Notes\Persistence\Entity\InMemoryUserRepository'
            );
        }) ;
    });

    describe('->add()', function () {
        it('should a 1 user to the repository', function () {
            $this->repo->add($this->userFactory->create());

            expect($this->repo->count())->to->equal(1);
        });
    });

    describe('->count()', function () {
        it('should a 1 user to the repository', function () {
            $this->repo->add($this->userFactory->create());
            $this->repo->add($this->userFactory->create());

            expect($this->repo->count())->to->equal(2);
        });
    });

    describe('->getUsers()', function () {
        it('should return a single User object', function () {
            /** @var \Notes\Domain\Entity\UserGroup\User $user */
            $user = $this->userFactory->create();
            $user->setUsername(new StringLiteral('Test'));

            $this->repo->add($user);
            expect($this->repo->count())->to->be->equal(1);
            /** @var \Notes\Domain\Entity\UserGroup\User $actual */
            $actual = $this->repo->getUsers();

            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\User');
        });
    });

    describe('->getByUsername()', function () {
        it('should return a single User object', function () {
            /** @var \Notes\Domain\Entity\UserGroup\User $user */
            $user = $this->userFactory->create();
            $user->setUsername(new StringLiteral('Test'));

            $this->repo->add($user);

            expect($this->repo->count())->to->be->equal(1);
            /** @var \Notes\Domain\Entity\UserGroup\User $actual */
            $actual = $this->repo->getByUsername('Test');

            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserGroup\User');
        });
    });

    describe('->removeByUsername()', function () {
        it('should return user count of 0', function () {
            /** @var \Notes\Domain\Entity\UserGroup\User $user */
            $user = $this->userFactory->create();
            $user->setUsername(new StringLiteral('Test'));

            $this->repo->add($user);

            expect($this->repo->count())->to->be->equal(1);
            /** @var \Notes\Domain\Entity\UserGroup\User $actual */
            $this->repo->removeByUserName('Test');
            expect($this->repo->count())->to->be->equal(0);
        });
    });
});
