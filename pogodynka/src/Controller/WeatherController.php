<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Location;
use App\Service\WeatherUtil;
use App\Service\LocationUtil;

class WeatherController extends AbstractController
{
    #[Route('/weather/{city}', name: 'app_weather', requirements: ['city' => '[a-zA-Z]+'])]
    public function city(string $city, LocationUtil $locationUtil, WeatherUtil $weatherUtil): Response
    {
        $location = $locationUtil->getLocationByString($city);
        $measurements = $weatherUtil->getWeatherForLocation($location);

        return $this->render('weather/city.html.twig', [
            'location' => $location,
            'measurements' => $measurements,
        ]);
    }
    
}
