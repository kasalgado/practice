<?php declare (strict_types=1);

namespace App\Generators;

class Kas
{
    public function getName(): string
    {
        $name = '';
        
        foreach ($this->createName() as $letter) {
            $name .= $letter;
        }
        
        return $name;
    }
    
    private function createName(): \Generator
    {
        yield 'K';
        yield 'A';
        yield 'S';
    }
}
