<?php

namespace App\Tests\Katas;

use App\Katas\CommonChild;
use PHPUnit\Framework\TestCase;

class CommonChildTest extends TestCase
{
    public function testGetCommon()
    {
        $str1 = 'HARRY';
        $str2 = 'SALLY';
        $cc = new CommonChild($str1, $str2);

        $this->assertEquals('AY', $cc->getCommon());

        $str1 = 'NOHARAAA';
        $str2 = 'SHINCHAN';
        $cc = new CommonChild($str1, $str2);

        $this->assertEquals('NHA', $cc->getCommon());
    }
}
