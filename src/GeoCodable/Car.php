<?php declare (strict_types=1);

namespace App\GeoCodable;

trait Car
{
    /** @var string */
    private $motorType;
    
    /** @var array */
    private $types = [
        'V8',
        'CR7',
    ];
    
    public function isMotorTypeAvailable(string $type)
    {
        $this->motorType = $type;
        
        return $this->typeExists();
    }
    
    private function typeExists()
    {
        return in_array($this->motorType, $this->types);
    }
}
