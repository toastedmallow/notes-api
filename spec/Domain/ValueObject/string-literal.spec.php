<?php

use Notes\Domain\ValueObject\StringLiteral;

describe('Notes\Domain\ValueObject\StringLiteral', function () {
    describe('->__construct()', function () {
        it('should return a StringLiteral object', function () {
            $actual = new StringLiteral();
            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
        });
    });
    
    describe('->__construct("foo")', function () {
        it('should return a StringLiteral object with the value of "foo"', function () {
            $value = 'foo';
            $actual = new StringLiteral($value);
            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($actual->__toString())->equal($value);
        });
    });
    describe('->__construct(123)', function () {
        it('should return an InvalidArgumentException', function () {
            try {
                new StringLiteral(123);
            } catch (Exception $e) {
                expect($e)->to->be->instanceof('\InvalidArgumentException');
            }
        });
    });
    describe('->__toString()', function () {
        it('should return the default', function () {
            $actual = new StringLiteral();
            expect($actual->__toString())->equal('');
        });
        it('should return "foo"', function () {
            $value = 'foo';
            $actual = new StringLiteral($value);
            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\StringLiteral'
            );
            expect($actual->__toString())->equal($value);
        });
    });
});
?>
