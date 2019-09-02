<?php declare (strict_types=1);

namespace App\ValueObjects;

final class Money
{
    /** @var int */
    private $value;
    
    /** @var string */
    private $currency;
    
    public function __construct(int $value, string $currency = 'USD')
    {
        $this->value = $value;
        $this->currency = $currency;
    }
    
    public function equals(Money $money): bool
    {
        return $this->value === $money->value && $this->currency === $money->currency;
    }
    
    public function getValue(): int
    {
        return $this->value;
    }
    
    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function toAdd(Money $money): Money
    {
        if ($this->currency !== $money->currency) {
            throw new \InvalidArgumentException('You can only add money with the same currency');
        }
        
        if ($money->value === 0) {
            return $this;
        }
        
        return new Money($this->value + $money->value, $this->currency);
    }
}
