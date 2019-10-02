<?php declare (strict_types=1);

namespace App\Patterns\Factory\Terrains;

abstract class Sea
{
    public abstract function create(): string;
}
