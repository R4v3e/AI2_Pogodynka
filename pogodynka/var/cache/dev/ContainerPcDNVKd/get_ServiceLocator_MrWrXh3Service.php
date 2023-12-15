<?php

namespace ContainerPcDNVKd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MrWrXh3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MrWrXh3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MrWrXh3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'location' => ['privates', '.errored..service_locator.MrWrXh3.App\\Entity\\Location', NULL, 'Cannot autowire service ".service_locator.MrWrXh3": it needs an instance of "App\\Entity\\Location" but this type has been excluded in "config/services.yaml".'],
            'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', true],
        ], [
            'entityManager' => '?',
            'location' => 'App\\Entity\\Location',
            'locationRepository' => 'App\\Repository\\LocationRepository',
        ]);
    }
}
