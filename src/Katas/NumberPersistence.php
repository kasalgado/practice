<?php declare(strict_types=1);

namespace App\Katas;

class NumberPesistence
{
    public function getMyTotal(int $num): int
    {
        $total = 0;

        while ($num > 9) {
            $num = array_product(str_split((string) $num));
            $total++;
        }

        return $total;
    }

    public function getTotal(int $num): int
    {
        return $num > 9 ? $this->getTotal(array_product(str_split((string) $num))) + 1 : 0;
    }
}