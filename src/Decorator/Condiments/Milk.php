<?php

declare(strict_types=1);

namespace App\Decorator\Condiments;

use App\Decorator\Beverages\CondimentDecorator;

class Milk extends CondimentDecorator
{

    public function cost(): float
    {
        return $this->beverage->cost() + 0.10;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', milk';
    }

}