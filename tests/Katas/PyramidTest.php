<?php declare (strict_types=1);

namespace tests\Traits;

use PHPUnit\Framework\TestCase;
use App\Katas\Pyramid;

class PyramidTest extends TestCase
{
    public function testCanCreatePyramidWithThreeRows()
    {
        $expectedRow1 = '*****';
        $expectedRow2 = '-***-';
        $expectedRow3 = '--*--';
        $pyramid = new Pyramid(3, '*', '-');
        
        $this->assertEquals($expectedRow1, $pyramid->getRow(0));
        $this->assertEquals($expectedRow2, $pyramid->getRow(1));
        $this->assertEquals($expectedRow3, $pyramid->getRow(2));
    }
}
