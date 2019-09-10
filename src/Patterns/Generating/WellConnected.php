<?php declare (strict_types=1);

namespace App\Patterns\Generating;

class WellConnected extends Employee
{
    public function fire(): string
    {
        return $this->name.': I will call my Mom';
    }
}
