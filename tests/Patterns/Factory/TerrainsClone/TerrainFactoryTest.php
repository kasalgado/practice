<?php declare (strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Patterns\Factory\TerrainsClone\TerrainFactory;
use App\Patterns\Factory\TerrainsClone\EarthSea;
use App\Patterns\Factory\TerrainsClone\EarthForest;
use App\Patterns\Factory\TerrainsClone\MarsSea;

class TerrainFactoryTest extends TestCase
{
    public function testCanGetSeaFromEarth()
    {
        $expected = 'A tile of sea on earth was created';
        $factory = new TerrainFactory(new EarthSea(2), new EarthForest());
        
        $this->assertEquals($expected, $factory->getSea()->create());
    }
    
    public function testCanGetSeaFromMars()
    {
        $expected = 'A tile of sea on mars was created';
        $factory = new TerrainFactory(new MarsSea(-1), new EarthForest());
        
        $this->assertEquals($expected, $factory->getSea()->create());
    }
    
    public function testCanGetSeaFromBothPlanets()
    {
        $earthExpected = 'A tile of sea on earth was created';
        $marsExpected = 'A tile of sea on mars was created';
        $factory = new TerrainFactory(new EarthSea(3), new EarthForest());
        $this->assertEquals($earthExpected, $factory->getSea()->create());
        
        $factory = new TerrainFactory(new MarsSea(4), new EarthForest());
        $this->assertEquals($marsExpected, $factory->getSea()->create());
    }
}
