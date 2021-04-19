<?php

namespace App\Tests\Katas;

use App\Katas\UtopianTree;
use PHPUnit\Framework\TestCase;

class UtopianTreeTest extends TestCase
{
    public function testGetHeight()
    {
        $ut = new UtopianTree(5);
        $this->assertEquals(14, $ut->getHeight());
    }
}
