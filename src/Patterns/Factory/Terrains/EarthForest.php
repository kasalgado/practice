<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

class EarthForest extends Forest
{
    public function create(): string
    {
        return 'A tile of forest was created';
    }
}
