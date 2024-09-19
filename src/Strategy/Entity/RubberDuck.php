<?php

declare(strict_types=1);

namespace App\Strategy\Entity;

use App\Strategy\EntityAction\FlyNoWay;
use App\Strategy\EntityAction\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display()
    {
        echo 'Утка резиновая';
    }
}