<?php declare (strict_types=1);

namespace App\Patterns\Composite\Army;

use App\Patterns\Composite\Unit\Unit;

class Army
{
    /** @var array */
    private $units = [];
    
    public function addUnit(Unit $unit): void
    {
        array_push($this->units, $unit);
    }
    
    public function getStrength(): int
    {
        $strength = 0;
        
        foreach ($this->units as $unit) {
            $strength += $unit->getStrength();
        }
        
        return $strength;
    }
}
