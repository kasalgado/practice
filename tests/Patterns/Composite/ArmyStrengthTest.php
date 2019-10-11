<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Composite\Army\Army;
use App\Patterns\Composite\Unit\Archer;
use App\Patterns\Composite\Unit\LaserSoldat;

class ArmyStrengthTest extends TestCase
{
    public function testCanGetStrength()
    {
        $expected = 22;
        $army = new Army();
        $army->addUnit(new Archer());
        $army->addUnit(new LaserSoldat());
        
        $this->assertEquals($expected, $army->getStrength());
    }
}
