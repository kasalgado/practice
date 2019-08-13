<?php declare (strict_types=1);

namespace App\Traits;

trait Car
{
    /** @var string */
    private $motorType;
    
    /** @var array */
    private $types = [
        'V8',
        'CR7',
    ];
    
    public function isMotorTypeAvailable(string $type): bool
    {
        $this->motorType = $type;
        
        return $this->typeExists();
    }
    
    private function typeExists(): bool
    {
        return in_array($this->motorType, $this->types);
    }
    
    private function typeNoExists(): bool
    {
        return !in_array($this->motorType, $this->types);
    }
}
