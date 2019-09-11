<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Before;

abstract class AppointmentEncoder
{
    public abstract function getMessage(): string;
}
