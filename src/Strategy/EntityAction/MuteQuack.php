<?php

declare(strict_types=1);

namespace App\Strategy\EntityAction;

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<< не издает звук >>" . PHP_EOL;
    }
}