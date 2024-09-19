<?php

declare(strict_types=1);

namespace App\Strategy\Entity;

use App\Strategy\EntityAction\FlyWithWings;
use App\Strategy\EntityAction\Quack;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo 'Утка красная' . PHP_EOL;
    }
}