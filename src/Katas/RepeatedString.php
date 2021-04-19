<?php declare (strict_types=1);

namespace App\Katas;

class RepeatedString
{
    /** @var string $str */
    private $str;

    /** @var int $number */
    private $number;

    public function __construct(string $str, int $number)
    {
        $this->str = $str;
        $this->number = $number;
    }

    public function createString(): string
    {
        return str_pad($this->str, $this->number, $this->str);
    }

    public function getTotal(string $c): int
    {
        return substr_count($this->createString(), $c);
    }
}