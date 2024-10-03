<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

class CondimentDecorator extends Beverage
{
    public function __construct(protected Beverage $beverage)
    {
    }

    public function cost(): float
    {
        return 0.89;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription();
    }
}