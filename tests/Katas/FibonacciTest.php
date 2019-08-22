<?php declare (strict_types=1);

namespace tests\Traits;

use PHPUnit\Framework\TestCase;
use App\Katas\Fibonacci;

class FibonacciTest extends TestCase
{
    public function testCanGetArrayWithTenNumbers()
    {
        $expected = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34];
        $fibonacci = new Fibonacci(10);
        
        $this->assertEquals($expected, $fibonacci->result());
    }
}
