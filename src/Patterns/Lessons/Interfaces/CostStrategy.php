<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Interfaces;

interface CostStrategy
{
    public function cost(Lesson $lesson);
    public function chargeType();
}
