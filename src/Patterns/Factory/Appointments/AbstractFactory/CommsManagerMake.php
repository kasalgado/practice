<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

abstract class CommsManagerMake
{
    const TYPE_APPT = 1;
    const TYPE_TTD = 2;
    const TYPE_CONTACT = 3;
    
    public abstract function getHeaderText(): string;
    public abstract function getFooterText(): string;
    public abstract function make(int $flag): object;
}
