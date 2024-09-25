<?php

declare(strict_types=1);

namespace App;

abstract class Pattern
{
    public function __construct()
    {
        $this->printName();
        $this->printTest();
    }

    protected function printName(): void
    {
        $name = $this::class;
        $name = substr($name, strrpos($name, '\\') + 1);
        echo '================= ';
        echo $name;
        echo ' =================';
        echo '<br>';
    }

    abstract public function printTest(): void;

    protected function printEmptyLine(): void
    {
        echo '<br>';
    }
}