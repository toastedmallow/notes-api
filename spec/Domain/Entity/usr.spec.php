<?php
/**
 * created by phpstorm.
 * user: casey
 * date: 11/3/2015
 * time: 6:12 pm
 */

use Notes\Domain\Entity\UserGroup\User;

describe('notes\Domain\Entity\UserGroup\User', function(){
   describe('->__construct()', function(){
       it('should return a user object', function(){
           $faker = \Faker\Factory::create();
           $username = $faker->userName;
           $firstName = $faker->firstName;
           $lastName = $faker->lastName;
           $email = $faker->email;

           $actual = new User($firstName, $lastName, $username, $email, true, true);

           expect($actual)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\User');
       });
   });

    describe('->getUserName()', function(){
       it('should return the user\'s username', function(){
            $faker = \Faker\Factory::create();
            $username = $faker->userName;

            $user = new User('TestName', 'TestLastName', $username, 'test@test.com', true, true);

            expect($user->getUserName())->equal($username);
        });
    });

    describe('->getName()', function(){
        it('should return the user\'s first and last name concatenated together. ', function(){
            $faker = \Faker\Factory::create();
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $name = $firstName . ' ' . $lastName;

            $user = new User($firstName, $lastName, 'testUsername', 'test@test.com', true, true);

            expect($user->getName())->equal($name);
        });
    });

    describe('->getEmail()', function(){
        it('should return the user\'s email', function(){
            $faker = \Faker\Factory::create();
            $email = $faker->email;

            $user = new User('TestName', 'TestLastName', 'testUserName', $email, true, true);

            expect($user->getEmail())->equal($email);
        });
    });

    describe('->getOwnerAccess()', function(){
        it('should return the user\'s email', function(){
            $faker = \Faker\Factory::create();
            $adminAccess = $faker->boolean(50);

            $user = new User('TestName', 'TestLastName', 'testUserName', 'test@test.com', $adminAccess, true);

            expect($user->getAdminAccess())->equal($adminAccess);
        });
    });

    describe('->getAdminAccess()', function(){
        it('should return the user\'s email', function(){
            $faker = \Faker\Factory::create();
            $ownerAccess = $faker->boolean(50);


            $user = new User('TestName', 'TestLastName', 'testUserName', 'test@test.com', true, $ownerAccess);

            expect($user->getOwnerAccess())->equal($ownerAccess);
        });
    });
});
?>

