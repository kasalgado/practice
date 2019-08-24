<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Interfaces;

use App\Patterns\Lessons\Interfaces\CostStrategy;

class FixedCostStrategy implements CostStrategy
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
