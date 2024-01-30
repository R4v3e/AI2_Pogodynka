<?php

namespace ContainerRAXPkqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BtGfOtqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BtGfOtq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BtGfOtq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'locationUtil' => ['privates', 'App\\Service\\LocationUtil', 'getLocationUtilService', true],
            'weatherUtil' => ['privates', 'App\\Service\\WeatherUtil', 'getWeatherUtilService', true],
        ], [
            'locationUtil' => 'App\\Service\\LocationUtil',
            'weatherUtil' => 'App\\Service\\WeatherUtil',
        ]);
    }
}