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
    
    public function testCanCreateATileOfPlains()
    {
        $expected = 'A tile of plains was created';
        $earthTerrainFactory = new EarthTerrainFactory();
        
        $this->assertEquals($expected, $earthTerrainFactory->getPlains()->create());
    }
    
    public function testCanCreateATileOfSea()
    {
        $expected = 'A tile of sea was created';
        $earthTerrainFactory = new EarthTerrainFactory();
        
        $this->assertEquals($expected, $earthTerrainFactory->getSea()->create());
    }
}
