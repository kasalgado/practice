<?php declare (strict_types=1);

namespace App\Katas;

class AlphabetPosition
{
    public function getNumbers(string $str): string
    {
        preg_match_all('/[a-z]/', strtolower($str), $out);
        return join(' ', array_map(
            function($ch) {
                return ord($ch) - 96;
            }, $out[0])
        );
    }

    public function myGetNumbers(string $str): string
    {
        $split = str_split(str_replace(' ', '', strtolower($str)));
        $abc = range('a', 'z');
        $result = '';

        foreach ($split as $c) {
            if (in_array($c, $abc)) {
                $result .= ' ' . (array_search($c, $abc) + 1);
            }
        }

        return trim($result);
    }
}