<?php declare (strict_types=1);

namespace App\Katas;

class Fibonacci
{
    /* @var int */
    private $length;
    
    /* @var array */
    private $result = [0, 1];
    
    public function __construct(int $length)
    {
        $this->length = $length;
        $this->create();
    }
    
    private function create(): void
    {
        $last = 0;
        $current = 1;
        
        for ($x = 3; $x <= $this->length; $x++) {
            $this->result[] = $last + $current;
            $last = $current;
            $current = $this->result[$x - 1];
        }
    }
    
    public function result(): array
    {
        return $this->result;
    }
}
