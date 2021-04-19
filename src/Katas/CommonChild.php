<?php declare (strict_types=1);

namespace App\Katas;

class CommonChild
{
    private $str1;
    private $str2;

    public function __construct($str1, $str2)
    {
        $this->str1 = $str1;
        $this->str2 = $str2;
    }

    private function findCommon(): string
    {
        $split1 = array_unique(str_split($this->str1));
        $split2 = array_unique(str_split($this->str2));
        $intersect = array_intersect($split1, $split2);

        return implode('', $intersect);
    }

    public function getCommon(): string
    {
        return $this->findCommon();
    }
}