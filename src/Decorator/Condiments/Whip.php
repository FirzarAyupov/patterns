<?php

declare(strict_types=1);

namespace App\Decorator\Condiments;

use App\Decorator\Beverages\CondimentDecorator;

class Whip extends CondimentDecorator
{
    protected string $description = 'Whip';

    public function cost(): float
    {
        return $this->beverage->cost() + 0.12;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', ' . $this->description;
    }

}