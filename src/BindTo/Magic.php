<?php declare (strict_types=1);

namespace App\BindTo;

class Magic
{
    /** @var int */
    private $magic;
    
    public function __construct(int $number)
    {
        $this->magic = $number;
    }
    
    public function getClosure(): object
    {
        return function() {
            return $this->magic;
        };
    }
    
    public function setMagic(int $number)
    {
        if ($number > 0) {
            $this->magic = $number;
        }
    }
}
