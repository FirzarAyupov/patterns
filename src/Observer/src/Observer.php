<?php

declare(strict_types=1);

namespace App\Observer\src;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);

}