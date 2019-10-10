<?php declare (strict_types=1);

namespace App\Patterns\Factory\TerrainsClone;

abstract class Forest
{
    public abstract function create(): string;
}
