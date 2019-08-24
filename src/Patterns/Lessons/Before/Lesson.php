<?php declare (strict_types=1);

namespace App\Patterns\Lessons\Before;

abstract class Lesson
{
    const FIXED = 1;
    const TIMED = 2;
    
    /* @var int */
    protected $duration;
    
    /* @var int */
    private $costType;
    
    public function __construct(int $duration, int $costType)
    {
        $this->duration = $duration;
        $this->costType = $costType;
    }
    
    public function total(): string
    {
        return $this->cost().$this->chargeType();
    }
    
    private function cost(): int
    {
        switch ($this->costType) {
            case self::TIMED:
                return 5 * $this->duration;
            
            case self::FIXED:
                return 30;
                
            default:
                $this->costType = self::FIXED;
                return 30;
        }
    }
    
    private function chargeType(): string
    {
        switch ($this->costType) {
            case self::TIMED:
                return ' (hourly rate)';
                
            case self::FIXED:
                return ' (fixed rate)';
                
            default:
                $this->costType = self::FIXED;
                return ' (fixed rate)';
        }
    }
}
