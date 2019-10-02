<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

abstract class ContactEncoder
{
    public abstract function encode(): string;
}
