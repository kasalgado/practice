<?php declare (strict_types=1);

namespace App\Patterns\Broadcasting;

class MorningStation implements StationStrategy
{
    public function getMessage(): string
    {
        return 'You are listening Morning Station';
    }
}
