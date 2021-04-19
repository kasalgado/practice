<?php declare (strict_types=1);

namespace App\Katas;

class UtopianTree
{
    /** @var int $cycles */
    private $cycles;

    /** @var int $height */
    private $height;

    public function __construct(int $cycles)
    {
        $this->cycles = $cycles;
        $this->increaseHeight();
    }

    private function increaseHeight(): void
    {
        for ($x = 0; $x <= $this->cycles; $x++) {
            $this->height = $x % 2 == 0 ? $this->height + 1 : $this->height * 2;
        }
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}