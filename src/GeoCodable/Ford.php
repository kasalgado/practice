<?php declare (strict_types=1);

namespace App\GeoCodable;

class Ford
{
    use Car;
    
    public function carIsReady(string $type): bool
    {
        return $this->isMotorTypeAvailable($type);
    }
}
