<?php declare (strict_types=1);

namespace App\Patterns\Factory\Appointments\AbstractFactory;

abstract class CommsManager
{
    public abstract function getHeaderText(): string;
    public abstract function getApptEncoder(): ApptEncoder;
    public abstract function getTtdEncoder(): TtdEncoder;
    public abstract function getContacttEncoder(): ContactEncoder;
    public abstract function getFooterText(): string;
}
