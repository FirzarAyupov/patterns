<?php

declare(strict_types=1);

namespace App\Strategy\EntityAction;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo 'летит' . PHP_EOL;
    }
}