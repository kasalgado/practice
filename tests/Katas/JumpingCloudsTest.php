<?php

namespace App\Tests\Katas;

use App\Katas\JumpingClouds;
use PHPUnit\Framework\TestCase;

class JumpingCloudsTest extends TestCase
{
    public function testGetMinimumJumps()
    {
        $clouds1 = [0, 1, 0, 0, 0, 1, 0];
        $clouds2 = [0, 1, 0, 1, 0, 1, 0, 1, 0];
        $clouds3 = [0, 1, 0, 0, 1, 0, 0, 1, 0];

        $jc1 = new JumpingClouds($clouds1);
        $jc2 = new JumpingClouds($clouds2);
        $jc3 = new JumpingClouds($clouds3);

        $this->assertEquals(3, $jc1->getMinimumJumps());
        $this->assertEquals(4, $jc2->getMinimumJumps());
        $this->assertEquals(3, $jc3->getMinimumJumps());
    }
}
