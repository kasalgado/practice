<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Interfaces;

abstract class Lesson
{
    /* @var int */
    private $duration;
    
    /* @var CostStrategy */
    private $costStrategy;

    public function __construct(int $duration, CostStrategy $cost)
    {
        $this->duration = $duration;
        $this->costStrategy = $cost;
    }
    
    private function cost(): int
    {
        return $this->costStrategy->cost($this);
    }
    
    private function chargeType(): string
    {
        return $this->costStrategy->chargeType();
    }
    
    public function total(): string
    {
        return $this->cost().$this->chargeType();
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
}
