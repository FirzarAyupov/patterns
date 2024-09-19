<?php

declare(strict_types=1);

namespace App\Strategy\Entity;

use App\Strategy\EntityAction\FlyBehavior;
use App\Strategy\EntityAction\QuackBehavior;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;

    public function swim(): void
    {
        echo 'Утка плавает';
    }

    abstract public function display();

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}