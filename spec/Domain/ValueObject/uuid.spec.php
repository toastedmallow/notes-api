<?php
use Notes\Domain\ValueObject\Uuid;
describe('ValueObject\Uuid', function () {
    describe('->__construct()', function () {
        it('should return a Uuid object', function () {
            $actual = new Uuid();
            expect($actual)->to->be->instanceof(
                '\Notes\Domain\ValueObject\Uuid'
            );
        });
    });
    describe('->__toString()', function () {
        it('should return a valid V4 UUID identifier', function () {
            $actual = new Uuid();
            $uuid = $actual->__toString();
            expect(is_string($uuid))->true();
            expect(
                preg_match(
                    '/[a-f0-9]{8}\-[a-f0-9]{4}\-4[a-f0-9]{3}\-(8|9|a|b)[a-f0-9]{3}\-[a-f0-9]{12}/',
                    $uuid
                )
            )->equal(1);
        });
    });
});
?>
