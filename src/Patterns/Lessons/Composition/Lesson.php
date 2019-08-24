<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Composition;

abstract class Lesson
{
    /* @var int */
    private $duration;
    
    /* @var CostStrategy */
    private $costStrategy;
    
    public function __construct(int $duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }
    
    public function getDuration(): int
    {
        return $this->duration;
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
}
