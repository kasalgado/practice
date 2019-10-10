<?php declare (strict_types=1);

namespace App\Patterns\Factory\TerrainsClone;

class EarthSea extends Sea
{
    public function create(): string
    {
        return 'A tile of sea on earth was created';
    }
}
