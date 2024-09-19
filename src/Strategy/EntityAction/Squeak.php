<?php

declare(strict_types=1);

namespace App\Strategy\EntityAction;

class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "пи-пи" . PHP_EOL;
    }
}