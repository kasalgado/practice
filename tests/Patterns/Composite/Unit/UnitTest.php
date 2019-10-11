<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Composite\Unit\Archer;
use App\Patterns\Composite\Unit\LaserSoldat;

class UnitTest extends TestCase
{
    public function testCanGetUnitStrength()
    {
        $expected = 2 + 20;
        $archer = new Archer();
        $laser = new LaserSoldat();
        
        $this->assertEquals($expected, $archer->getStrength() + $laser->getStrength());
    }
}
