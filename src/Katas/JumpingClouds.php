<?php declare (strict_types=1);

namespace App\Katas;

class JumpingClouds
{
    /** @var array $clouds */
    private $clouds = [];

    /** @var int $jumps */
    private $jumps;

    public function __construct(array $clouds)
    {
        $this->clouds = $clouds;
        $this->findJumps();
    }

    private function findJumps(): void
    {
        $length = count($this->clouds);
        $step = 1;

        for ($x = 1; $x <= $length - 1; $x++) {
            if (!$this->clouds[$x]) {
                if ($step == 1 && $x <= $length - 2 && $this->clouds[$x + 1] == 0) {
                    $step++;
                    continue;
                }
                $this->jumps++;
                $step = 1;
            }
        }
    }

    public function getMinimumJumps(): int
    {
        return $this->jumps;
    }
}