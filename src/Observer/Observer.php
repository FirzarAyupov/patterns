<?php

declare(strict_types=1);

namespace App\Observer;

use App\Observer\src\CurrentConditionsDisplay;
use App\Observer\src\WeatherData;
use App\Pattern;

class Observer extends Pattern
{
    public function printTest(): void
    {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        echo 'Обновление данных метеостанции';
        $this->printEmptyLine();
        $weatherData->setMeasurements(80, 65, 30.4);
        $this->printEmptyLine();
        echo 'Обновление данных метеостанции';
        $this->printEmptyLine();
        $weatherData->setMeasurements(90, 60, 34);
    }
}