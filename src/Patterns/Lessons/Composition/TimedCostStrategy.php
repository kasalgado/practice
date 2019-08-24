<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Composition;

class TimedCostStrategy extends CostStrategy
{
    public function chargeType(): string
    {
        return ' (hourly rate)';
    }

    public function cost(Lesson $lesson): int
    {
        return 5 * $lesson->getDuration();
    }
}
