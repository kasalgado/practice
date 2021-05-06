<?php declare(strict_types=1);

namespace App\Katas;

class RomanNumeralDecoder
{
    private $map = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    
    public function getNumber(string $roman): int
    {
        $result = 0;        
        $split = str_split($roman);
        
        for ($x = 0; $x < count($split); $x++) {
            $current = $this->map[$split[$x]];
            
            if ($x <= count($split) - 2) {
                $next = $this->map[$split[$x + 1]];

                if ($current < $next) {
                    $result += $next - $current;
                    $x++;
                    continue;
                }
            }
            
            $result += $current;
        }

        return $result;
    }
}
