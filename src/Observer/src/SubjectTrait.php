<?php

declare(strict_types=1);

namespace App\Observer\src;

trait SubjectTrait
{
    private array $observers = [];

    public function registerObserver(Observer $observer): void
    {
        if (!in_array($observer, $this->observers)) {
            $this->observers[] = $observer;
        }
    }

    public function removeObserver(Observer $observer): void
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

}