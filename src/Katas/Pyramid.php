<?php declare (strict_types=1);

namespace App\Katas;

class Pyramid
{
    /** @var array */
    private $rows = [];
    
    /** @var string */
    private $char;
    
    /** @var string */
    private $separator;

    public function __construct(int $rows, string $char = '*', string $separator = ' ')
    {
        $this->char = $char;
        $this->separator = $separator;
        $this->rows = range(1, $rows);
        $this->create($rows);
    }
    
    public function getRow(int $row): string
    {
        return $this->rows[$row];
    }
    
    public function show(): void
    {
        $this->rows = array_reverse($this->rows);
        
        foreach ($this->rows as $row) {
            echo $row."\n";
        }
    }
    
    public function reverse(): void
    {
        foreach ($this->rows as $row) {
            echo $row."\n";
        }
    }

    private function create(int $rows): void
    {
        $maxChars = $rows * 2 - 1;
        
        foreach ($this->rows as $index => &$row) {
            $row = $this->setSeparator($index, str_repeat($this->char, $maxChars));
            $maxChars -= 2;
        }
    }
    
    private function setSeparator(int $index, string $chars): string
    {
        return $index ? str_repeat($this->separator, $index).$chars.str_repeat($this->separator, $index) : $chars;
    }
}
