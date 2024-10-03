<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

class HouseBlend extends Beverage
{
    protected string $description = 'House Blend Coffee';

    public function cost(): float
    {
        return 0.89;
    }
}