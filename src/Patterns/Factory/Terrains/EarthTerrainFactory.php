<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

class EarthTerrainFactory extends TerrainFactory
{
    public function getForest(): Forest
    {
        return new EarthForest();
    }

    public function getPlains(): Plains
    {
        return new EarthPlains();
    }

    public function getSea(): Seat
    {
        return new EarthSea();
    }
}
