<?php declare (strict_types=1);

namespace App\ValueObjects;

class Currency
{
    /** @var string */
    private $currency;

    public function __construct(string $currency)
    {
        $this->check($currency);
        $this->currency = $currency;
    }
    
    public function get(): string
    {
        return $this->currency;
    }
    
    public function check(string $currency): void
    {
        if (strlen($currency) !== 3 || !ctype_alpha($currency)) {
            throw new \InvalidArgumentException('Currency has to consist of three letters');
        }
    }
}
