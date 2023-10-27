<?php

namespace ContainerTkqxeZn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ErrorHandlerConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'debug.error_handler_configurator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/ErrorHandlerConfigurator.php';

        $a = ($container->privates['logger'] ?? self::getLoggerService($container));

        return $container->services['debug.error_handler_configurator'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator($a, NULL, -1, true, true, $a);
    }
}
