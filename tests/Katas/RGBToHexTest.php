<?php

namespace App\Tests\Katas;

use App\Katas\RGBToHex;
use PHPUnit\Framework\TestCase;

class RGBToHexTest extends TestCase
{
    public function testGet()
    {
        $rth = new RGBToHex(255, 255, 255);
        $this->assertEquals('FFFFFF', $rth->get());

        $rth = new RGBToHex(255, 255, 300);
        $this->assertEquals('FFFFFF', $rth->get());

        $rth = new RGBToHex(0,0,0);
        $this->assertEquals('000000', $rth->get());

        $rth = new RGBToHex(-500,0,0);
        $this->assertEquals('000000', $rth->get());

        $rth = new RGBToHex(148, 0, 211);
        $this->assertEquals('9400D3', $rth->get());
    }
}
