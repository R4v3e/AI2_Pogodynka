<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Location;
use App\Entity\Forecast;
use App\Repository\LocationRepository;

class LocationUtil
{
    public function __construct(
        private readonly LocationRepository $locationRepository
    )
    {
    }

    /**
     * @return Location
     */
    public function getLocationByString(string $location): ?Location
    {
        $_location = $this->locationRepository->findOneBy(['city' => $location]);
        if (!$_location) {
            $location =  $this->locationRepository->findOneBy(['country' => $location]);
            if (!$_location) {
                return $_location;
            }
        }
        return $_location;
    }

     /**
     * @return Location
     */
    public function getLocationByCountryAndCity(string $countryCode, string $city): ?Location
    {
        $_location = $this->locationRepository->findOneBy([
            'country' => $countryCode,
            'city' => $city,
        ]);
        return $_location;
    }
}
