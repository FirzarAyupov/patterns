<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Pattern;
use App\Strategy\Entity\DecoyDuck;
use App\Strategy\Entity\Duck;
use App\Strategy\Entity\MallardDuck;
use App\Strategy\Entity\RedheadDuck;
use App\Strategy\Entity\RubberDuck;

class Strategy extends Pattern
{
    public function printTest(): void
    {
        $this->duck_create(new RubberDuck());
        $this->duck_create(new DecoyDuck());
        $this->duck_create(new MallardDuck());
        $this->duck_create(new RedheadDuck());
    }

    public function duck_create(Duck $duck): void
    {
        echo '->';
        $duck->display();
        echo '<br>';
        $duck->performFly();
        echo '<br>';
        $duck->performQuack();
        echo '<br>';
    }
}