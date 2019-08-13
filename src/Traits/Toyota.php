<?php declare (strict_types=1);

namespace App\Traits;

class Toyota
{
    use Car;
    
    public function carIsReady(string $type): bool
    {
        return $this->isMotorTypeAvailable($type);
    }
}
