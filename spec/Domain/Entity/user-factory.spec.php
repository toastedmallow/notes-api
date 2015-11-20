<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/17/2015
 * Time: 6:11 PM
 */
use Notes\Domain\Entity\UserFactory;

describe('Notes\Domain\Entity\UserFactory', function () {
    describe('->__construct()', function () {
        it('should return a new UserFactory Object', function () {
            $actual = new UserFactory();
            expect($actual)->to->be->instanceof('Notes\Domain\Entity\UserFactory');
        });
    });

    describe('->create()', function(){
        it('should create a new User object', function(){
            $factory = new UserFactory();
            $actual = $factory->create();

            expect($actual)->to->be->instanceof('Notes\Domain\Entity\User');
        });
    });

});
