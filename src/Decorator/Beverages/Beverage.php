<?php

declare(strict_types=1);

namespace App\Decorator\Beverages;

abstract class Beverage
{
    protected string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float
    {
        return 0.0;
    }

}