<?php

namespace App\Tests\Katas;

use App\Katas\NumberPersistence;
use PHPUnit\Framework\TestCase;

class NumberPesistenceTest extends TestCase
{
    public function testGetTotal()
    {
        $np = new NumberPersistence();

        $this->assertEquals(3, $np->getMyTotal(39));
        $this->assertEquals(4, $np->getMyTotal(999));
        $this->assertEquals(0, $np->getMyTotal(4));

        $this->assertEquals(3, $np->getTotal(39));
        $this->assertEquals(4, $np->getTotal(999));
        $this->assertEquals(0, $np->getTotal(4));
    }
}
