<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\Implementation;

abstract class Communicator
{
    public abstract function getHeaderText(): string;
    public abstract function getEncoder(): AppointmentEncoder;
    public abstract function getFooterText(): string;
}
