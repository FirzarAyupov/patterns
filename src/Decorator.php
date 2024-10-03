<?php

declare(strict_types=1);

namespace App;

use App\Decorator\Beverages\Espresso;
use App\Decorator\Condiments\Milk;
use App\Decorator\Condiments\Whip;

class Decorator extends Pattern
{
    public function printTest(): void
    {
        $espresso = new Espresso();
        echo 'создан объект Espresso</br>';
        echo $espresso->getDescription() . ' $' . $espresso->cost() . '</br>';

        $milk = new Milk($espresso);
        echo 'добавлен Milk' . '</br>';
        echo $milk->getDescription() . ' $' . $milk->cost() . '</br>';

        $milk = new Whip($milk);
        echo 'добавлен Whip' . '</br>';
        echo $milk->getDescription() . ' $' . $milk->cost() . '</br>';
    }
}