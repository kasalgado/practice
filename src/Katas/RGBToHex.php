<?php declare(strict_types=1);

namespace App\Katas;

class RGBToHex
{
    private $rgb = [];

    public function __construct(int $r, int $g, int $b)
    {
        $this->rgb = [$r, $g, $b];
    }

    public function get(): string
    {
        return vsprintf('%02X%02X%02X', array_map(function (int $v) {
            return min(max($v, 0), 255);
        }, $this->rgb));
    }
}