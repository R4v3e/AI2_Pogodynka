<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Location;
use App\Entity\Forecast;
use App\Repository\LocationRepository;
use App\Repository\ForecastRepository;
use App\Service\LocationUtil;
class WeatherUtil
{
    public function __construct(
        private readonly ForecastRepository $measurementRepository,
        private readonly LocationUtil $locationUtil
    )
    {
    }
    /**
     * @return Forecast[]
     */
    public function getWeatherForLocation(location $location): array
    {
        $measurements = $this->measurementRepository->findByLocation($location);
        return $measurements;
    }

    public function getWeatherForLocationByID(string $id): array
    {
        $measurements = $this->measurementRepository->findByLocationID($id);
        return $measurements;
    }
    /**
     * @return Forecast[]
     */
    public function getWeatherByString(string $location): array
    {
        $location_ = $this->locationUtil->getLocationByString($location);
        $measurements = $this->measurementRepository->findByLocation($location_);
        return $measurements;
    }

    /**
     * @return Forecast[]
     */
    public function getWeatherForCountryAndCity(string $countryCode, string $city): array
    {
        $location_ = $this->locationUtil->getLocationByCountryAndCity($countryCode,$city);
        $measurements = $this->measurementRepository->findByLocation($location_);

        return $measurements;
    }
}
