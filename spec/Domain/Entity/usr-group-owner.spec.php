<?php
/**
 * File name: user.spec.php
 * Project: notes-api
 * PHP version 5
 * @category  PHP
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * $LastChangedDate$
 * $LastChangedBy$
 */
use Notes\Domain\Entity\UserGroup\Group\Owner;

describe('Notes\Domain\Entity\UserGroup\Group\Owner', function () {
    describe('->__construct()', function () {
        it('should return a Owner object', function () {
            $actual = new Owner();
            expect($actual)->to->be->instanceof('\Notes\Domain\Entity\UserGroup\Group\Owner');
        });
    });

    describe('->addNote()', function () {
        it('should return the true if added', function () {
            $faker = \Faker\Factory::create();
            $note = $faker->text(200);
            $actual = new Owner();

            expect($actual->addNote($note))->equal(true);
        });
    });

    describe('->updateNote()', function () {
        it('should return the true if updated', function () {
            $faker = \Faker\Factory::create();
            $note = $faker->text(200);
            $id = $faker->numberBetween(2,335);
            $actual = new Owner();
            expect($actual->editNote($id,$note))->equal(true);
        });
    });

    describe('->deleteNote()', function () {
        it('should return the true if deleted', function () {
            $faker = \Faker\Factory::create();
            $id = $faker->numberBetween(2,335);
            $actual = new Owner();
            expect($actual->deleteNote($id))->equal(true);
        });
    });
});

?>
