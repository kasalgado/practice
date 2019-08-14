<?php declare (strict_types=1);

namespace App\Closures;

class Mapping
{
    public function getResult(array $numbers): array
    {
        return $this->create($numbers);
    }
    
    public function getResultWithNumber(int $adding, array $numbers): array
    {
        return $this->createWithNumber($adding, $numbers);
    }
    
    private function create(array $numbers): array
    {
        $mapping = array_map(function($number) {
            return $number + 1;
        }, $numbers);
        
        return $mapping;
    }
    
    private function createWithNumber(int $adding, array $numbers): array
    {
        $mapping = array_map(function($number) use ($adding) {
            return $number + $adding;
        }, $numbers);
        
        return $mapping;
    }
}
