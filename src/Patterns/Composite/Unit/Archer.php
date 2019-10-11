<?php declare (strict_types=1);

namespace App\Patterns\Composite\Unit;

class Archer extends Unit
{
    public function getStrength(): int
    {
        return 2;
    }
}
