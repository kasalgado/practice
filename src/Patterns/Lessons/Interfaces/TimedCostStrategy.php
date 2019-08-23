<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Interfaces;

use App\Patterns\Lessons\Interfaces\CostStrategy;

class TimedCostStrategy implements CostStrategy
{
    const DURATION_MULTIPLIER = 5;
    
    public function chargeType(): string
    {
        return ' (hourly rate)';
    }

    public function cost(Lesson $lesson): int
    {
        return $lesson->getDuration() * self::DURATION_MULTIPLIER;
    }
}
