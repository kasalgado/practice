<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

abstract class TtdEncoder
{
    public abstract function encode(): string;
}
