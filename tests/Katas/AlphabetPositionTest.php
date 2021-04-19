<?php

namespace App\Tests\Katas;

use App\Katas\AlphabetPosition;
use PHPUnit\Framework\TestCase;

class AlphabetPositionTest extends TestCase
{
    public function testCanGetNumbersFromLetters()
    {
        $alphabetPosition = new AlphabetPosition();

        $this->assertEquals(
            '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11',
            $alphabetPosition->getNumbers('The sunset sets at twelve o\' clock.')
        );
        $this->assertEquals(
            '20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20',
            $alphabetPosition->getNumbers('The narwhal bacons at midnight.'));
        $this->assertEquals('', $alphabetPosition->getNumbers('=-=\''));

        $this->assertEquals(
            '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11',
            $alphabetPosition->myGetNumbers('The sunset sets at twelve o\' clock.')
        );
        $this->assertEquals(
            '20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20',
            $alphabetPosition->myGetNumbers('The narwhal bacons at midnight.'));
        $this->assertEquals('', $alphabetPosition->myGetNumbers('=-=\''));
    }
}
