<?php

declare(strict_types=1);

namespace App\Observer\src;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObservers();

}