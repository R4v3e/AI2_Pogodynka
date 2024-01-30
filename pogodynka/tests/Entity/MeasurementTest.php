<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Forecast;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['0', 32],
            ['-100', -148],
            ['100', 212],
            ['0.5', 32.9],
            ['-4', 24.8], 
            ['37', 98.6],
            ['20', 68], 
            ['-40', -40], 
            ['10', 50],
            ['15.50', 59.9] 
        ];
    }

    /**
    * @dataProvider dataGetFahrenheit
    */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void 
    {
        $forecast = new Forecast();

        $forecast->setTemperature($celsius);
        $this->assertEquals($expectedFahrenheit, $forecast->getFahrenheit(), "{$celsius}°C should be {$expectedFahrenheit}°F");
    }
}


