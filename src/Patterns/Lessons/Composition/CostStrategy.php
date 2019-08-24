<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Composition;

use App\Patterns\Lessons\Composition\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();
}
