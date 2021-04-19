<?php

namespace App\Tests\Katas;

use App\Katas\RepeatedString;
use PHPUnit\Framework\TestCase;

class RepeatedStringTest extends TestCase
{
    public function testCreateString()
    {
        $str = 'abcac';
        $number = 10;
        $rs = new RepeatedString($str, $number);

        $this->assertEquals('abcacabcac', $rs->createString());
    }

    public function testGetTotal()
    {
        $str = 'abcac';
        $number = 10;
        $char = 'a';
        $rs = new RepeatedString($str, $number);

        $this->assertEquals(4, $rs->getTotal($char));
    }
}
