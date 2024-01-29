<?php

namespace Container2TT5S6B;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherLocationIdCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\WeatherLocationIdCommand' shared autowired service.
     *
     * @return \App\Command\WeatherLocationIdCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/WeatherLocationIdCommand.php';

        $container->privates['App\\Command\\WeatherLocationIdCommand'] = $instance = new \App\Command\WeatherLocationIdCommand(($container->privates['App\\Service\\WeatherUtil'] ?? $container->load('getWeatherUtilService')), ($container->privates['App\\Service\\LocationUtil'] ?? $container->load('getLocationUtilService')));

        $instance->setName('weather:location_id');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}
