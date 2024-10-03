<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

class Espresso extends Beverage
{
    protected string $description = 'Espresso';

    public function cost(): float
    {
        return 1.99;
    }
}