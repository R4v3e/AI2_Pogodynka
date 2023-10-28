<?php

namespace ContainerVYZJ7c4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JMztiK3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jMztiK3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jMztiK3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'city' => ['privates', '.errored..service_locator.jMztiK3.App\\Entity\\Location', NULL, 'Cannot autowire service ".service_locator.jMztiK3": it needs an instance of "App\\Entity\\Location" but this type has been excluded in "config/services.yaml".'],
            'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\ForecastRepository', 'getForecastRepositoryService', true],
        ], [
            'city' => 'App\\Entity\\Location',
            'locationRepository' => 'App\\Repository\\LocationRepository',
            'repository' => 'App\\Repository\\ForecastRepository',
        ]);
    }
}