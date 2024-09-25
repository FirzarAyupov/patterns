<?php

declare(strict_types=1);

namespace App\Observer\src;

class WeatherData implements Subject
{
    use SubjectTrait;

    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;

    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}