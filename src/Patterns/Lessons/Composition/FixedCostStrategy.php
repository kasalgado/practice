<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Composition;

class FixedCostStrategy extends CostStrategy
{
    public function chargeType(): string
    {
        return ' (fixed rate)';
    }

    public function cost(Lesson $lesson): int
    {
        return 30;
    }
}
