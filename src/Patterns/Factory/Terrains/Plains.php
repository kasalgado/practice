<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

abstract class Plains
{
    public abstract function create(): string;
}
