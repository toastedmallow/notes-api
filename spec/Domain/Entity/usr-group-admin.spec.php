<?php
/**
 * Created by PhpStorm.
 * User: Casey
 * Date: 11/3/2015
 * Time: 6:20 PM
 */

use Notes\Domain\Entity\UserGroup\Group\Admin;
describe('Notes\Domain\Entity\UserGroup\Group\Owner', function () {
    describe('->__construct()', function () {
        it('should return a Admin object', function () {
            $actual = new Admin(true, false, true, true);
            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\Group\Admin');
        });
    });

    describe('->addUser()', function () {
        it('should return true if user is added', function () {
            $faker = \Faker\Factory::create();
            $username = $faker->userName;
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = $faker->email;

            $actual = new Admin();
            $addUser = $actual->addUser($firstName, $lastName, $username, $email, true, true);
            expect($addUser)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\User');
        });
    });

    describe('->removeUser()', function(){
        it('should return true if user is removed', function(){
            $faker = \Faker\Factory::create();
            $username = $faker->userName;

            $user = new Admin();
            expect($user->removeUser($username))->equal(true);
        });
    });

    describe('->editNote()', function(){
        it('should return true if note is edited', function(){
            $faker = \Faker\Factory::create();
            $id = $faker->numberBetween(2,335);
            $note = $faker->text(100);

            $user = new Admin();

            expect($user->editNote($id, $note))->equal(true);
        });
    });

    describe('->removeNote()', function(){
        it('should return true if note is removed', function(){
            $faker = \Faker\Factory::create();
            $id = $faker->numberBetween(2,335);

            $user = new Admin();

            expect($user->removeNote($id))->equal(true);
        });
    });
});
?>
