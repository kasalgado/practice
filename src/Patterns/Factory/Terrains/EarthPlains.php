<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

class EarthPlains extends Plains
{
    public function create(): string
    {
        return 'A tile of plains was created';
    }
}
