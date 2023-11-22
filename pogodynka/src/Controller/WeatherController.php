<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LocationRepository; 
use App\Entity\Location;
use App\Repository\ForecastRepository;
class WeatherController extends AbstractController
{
    #[Route('/weather/{city}', name: 'app_weather', requirements: ['city' => '[a-zA-Z]+'])]
    public function city(string $city, LocationRepository $locationRepository, ForecastRepository $repository): Response
    {
        $location = $locationRepository->findOneBy(['city' => $city]);
        if (!$location) {
            $location = $locationRepository->findOneBy(['country' => $city]);
            if (!$location) {
                throw $this->createNotFoundException('Location not found for the given city.');
            }
        }
        $measurements = $repository->findByLocation($location);

        return $this->render('weather/city.html.twig', [
            'location' => $location,
            'measurements' => $measurements,
        ]);
    }
    
}
