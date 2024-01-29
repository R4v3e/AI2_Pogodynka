<?php

namespace App\Controller;

use App\Service\WeatherUtil;
use App\Entity\Forecast;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

class WeatherApiController extends AbstractController
{
    private WeatherUtil $weatherUtil;

    public function __construct(WeatherUtil $weatherUtil)
    {
        $this->weatherUtil = $weatherUtil;
    }

    #[Route('/api/v1/weather', name: 'app_weather_api', methods: ['GET'])]
    public function index(
        #[MapQueryParameter] string $country, 
        #[MapQueryParameter] string $city,
        #[MapQueryParameter] string $format = 'json',
        #[MapQueryParameter('twig')] bool $twig = false
    ): Response {
        $forecasts = $this->weatherUtil->getWeatherForCountryAndCity($country, $city);

        // When the twig parameter is true, render using TWIG templates
        if ($twig) {
            $template = strtolower($format) === 'csv' ? 'weather_api/index.csv.twig' : 'weather_api/index.json.twig';
            $response = $this->render($template, [
                'city' => $city,
                'country' => $country,
                'forecasts' => $forecasts,
            ]);

            if (strtolower($format) === 'csv') {
                $response->headers->set('Content-Type', 'text/csv');
            } else {
                $response->headers->set('Content-Type', 'application/json');
            }

            return $response;
        }

        return $this->json([
            'city' => $city,
            'country' => $country,
            'forecasts' => array_map(fn(Forecast $forecast) => [
                'date' => $forecast->getTimestamp()->format('Y-m-d'),
                'temperatureCelsius' => $forecast->getTemperature(),
                'temperatureFahrenheit' => $forecast->getFahrenheit(),
            ], $forecasts),
        ]);
    }

    private function formatForecastsToCSV(array $forecasts, string $city, string $country): string {
        $csvLines = [];
        $csvLines[] = 'city,country,date,temperature';

        foreach ($forecasts as $forecast) {
            $csvLines[] = sprintf(
                '%s,%s,%s,%s',
                $city,
                $country,
                $forecast->getTimestamp()->format('Y-m-d'),
                $forecast->getTemperature()
            );
        }

        return implode("\n", $csvLines);
    }
}
