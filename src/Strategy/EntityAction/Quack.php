<?php

declare(strict_types=1);

namespace App\Strategy\EntityAction;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "кря-кря" . PHP_EOL;
    }
}