<?php

declare(strict_types=1);

namespace App\Strategy\EntityAction;

class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo 'не летит' . PHP_EOL;
    }
}