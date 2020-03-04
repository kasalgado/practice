<?php declare (strict_types=1);

namespace App\Katas;

class Fibonacci
{
    /* @var int */
    private $length;
    
    /* @var array */
    private $result;
    
    public function __construct(int $length)
    {
        $this->length = $length;
    }
    
    private function createIterative(): void
    {
        $this->result = [0, 1];
        $last = 0;
        $current = 1;
        
        for ($x = 3; $x <= $this->length; $x++) {
            $this->result[] = $last + $current;
            $last = $current;
            $current = $this->result[$x - 1];
        }
    }
    
    private function createRecursive(int $counter): int
    {
        if ($counter === 0 || $counter === 1) {
            return $counter;
        } else {
            return ($this->createRecursive($counter - 1) + $this->createRecursive($counter - 2));
        }
    }
    
    public function iterative(): array
    {
        $this->createIterative();
        return $this->result;
    }
    
    public function recursive(): array
    {
        for ($x = 0; $x < $this->length; $x++) {
            $this->result[] = $this->createRecursive($x);
        }
        
        return $this->result;
    }
}
