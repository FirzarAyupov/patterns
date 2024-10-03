<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

class DarkRoast extends Beverage
{
    protected string $description = 'Dark Roast';

    public function cost(): float
    {
        return 0.99;
    }
}