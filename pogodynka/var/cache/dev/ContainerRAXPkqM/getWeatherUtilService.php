<?php

namespace ContainerRAXPkqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherUtilService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\WeatherUtil' shared autowired service.
     *
     * @return \App\Service\WeatherUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/WeatherUtil.php';

        return $container->privates['App\\Service\\WeatherUtil'] = new \App\Service\WeatherUtil(($container->privates['App\\Repository\\ForecastRepository'] ?? $container->load('getForecastRepositoryService')), ($container->privates['App\\Service\\LocationUtil'] ?? $container->load('getLocationUtilService')));
    }
}
