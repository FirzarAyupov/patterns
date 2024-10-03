<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

class Decaf extends Beverage
{
    protected string $description = 'Decaf';

    public function cost(): float
    {
        return 1.05;
    }
}