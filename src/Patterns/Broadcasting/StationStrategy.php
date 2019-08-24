<?php declare (strict_types=1);

namespace App\Patterns\Broadcasting;

interface StationStrategy
{
    public function getMessage(): string;
}
