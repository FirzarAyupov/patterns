<?php

declare(strict_types=1);

namespace App\Strategy\Entity;

use App\Strategy\EntityAction\FlyNoWay;
use App\Strategy\EntityAction\MuteQuack;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        echo 'Утка приманка';
    }
}