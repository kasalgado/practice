<?php declare (strict_types=1);

namespace App\Patterns\Factory\TerrainsClone;

class MarsSea extends Sea
{
    public function create(): string
    {
        return 'A tile of sea on mars was created';
    }
}
