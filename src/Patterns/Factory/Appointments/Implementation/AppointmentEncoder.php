<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

abstract class AppointmentEncoder
{
    public abstract function encode(): string;
}
