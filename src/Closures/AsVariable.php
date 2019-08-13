<?php declare (strict_types=1);

namespace App\Closures;

class AsVariable
{
    public function getName(string $name): string
    {
        return $this->create($name);
    }
    
    public function create(string $name): string
    {
        $setName = function(string $name) {
            return $name;
        };
        
        return $setName($name);
    }
}
