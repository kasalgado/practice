<?php declare (strict_types=1);

namespace App\Closures;

class Attach
{
    public function getText(string $name, string $content): string
    {
        return $this->create($name, $content);
    }
    
    private function getName(string $name): object
    {
        return function($doCommand) use ($name) {
            return $name . ', ' . $doCommand;
        };
    }
    
    private function create(string $name, string $content): string
    {
        $text = $this->getName($name);
        
        return $text($content);
    }
}
