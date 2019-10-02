<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\Terrains\EarthTerrainFactory;

class EarthFactoryTest extends TestCase
{
    public function testCanCreateATileOfForest()
    {
        $expected = 'A tile of forest was created';
        $earthTerrainFactory = new EarthTerrainFactory();
        
        $this->assertEquals($expected, $earthTerrainFactory->getForest()->create());
    }
}
