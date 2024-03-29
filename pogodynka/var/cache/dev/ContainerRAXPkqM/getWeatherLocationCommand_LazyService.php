<?php

namespace ContainerRAXPkqM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeatherLocationCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\WeatherLocationCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\WeatherLocationCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('weather:location', [], 'Add a short description for your command', false, #[\Closure(name: 'App\\Command\\WeatherLocationCommand')] fn (): \App\Command\WeatherLocationCommand => ($container->privates['App\\Command\\WeatherLocationCommand'] ?? $container->load('getWeatherLocationCommandService')));
    }
}
