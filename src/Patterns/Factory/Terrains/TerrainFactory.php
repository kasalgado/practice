<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

abstract class TerrainFactory
{
    public abstract function getPlains(): Plains;
    public abstract function getSea(): Seat;
    public abstract function getForest(): Forest;
}
