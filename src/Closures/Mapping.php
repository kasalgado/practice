<?php declare (strict_types=1);

namespace App\Closures;

class Mapping
{
    public function getResult(array $numbers): array
    {
        return $this->create($numbers);
    }
    
    private function create(array $numbers): array
    {
        $mapping = array_map(function($number) {
            return $number + 1;
        }, $numbers);
        
        return $mapping;
    }
}
