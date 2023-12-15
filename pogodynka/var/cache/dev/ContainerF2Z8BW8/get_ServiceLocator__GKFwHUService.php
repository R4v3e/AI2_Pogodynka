<?php

namespace ContainerF2Z8BW8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__GKFwHUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..gKFwHU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..gKFwHU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ForecastController::delete' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController::edit' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController::index' => ['privates', '.service_locator.W6hnBOj', 'get_ServiceLocator_W6hnBOjService', true],
            'App\\Controller\\ForecastController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ForecastController::show' => ['privates', '.service_locator.AySNhdq', 'get_ServiceLocator_AySNhdqService', true],
            'App\\Controller\\LocationController::delete' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController::edit' => ['privates', '.service_locator.MrWrXh3', 'get_ServiceLocator_MrWrXh3Service', true],
            'App\\Controller\\LocationController::index' => ['privates', '.service_locator.YNXvnLc', 'get_ServiceLocator_YNXvnLcService', true],
            'App\\Controller\\LocationController::new' => ['privates', '.service_locator.7hCOGnU', 'get_ServiceLocator_7hCOGnUService', true],
            'App\\Controller\\LocationController::show' => ['privates', '.service_locator.dgpf7NO', 'get_ServiceLocator_Dgpf7NOService', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\WeatherController::city' => ['privates', '.service_locator.ckBkmQl', 'get_ServiceLocator_CkBkmQlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ForecastController:delete' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController:edit' => ['privates', '.service_locator.2atuCAt', 'get_ServiceLocator_2atuCAtService', true],
            'App\\Controller\\ForecastController:index' => ['privates', '.service_locator.W6hnBOj', 'get_ServiceLocator_W6hnBOjService', true],
            'App\\Controller\\ForecastController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\ForecastController:show' => ['privates', '.service_locator.AySNhdq', 'get_ServiceLocator_AySNhdqService', true],
            'App\\Controller\\LocationController:delete' => ['privates', '.service_locator.1AE27f6', 'get_ServiceLocator_1AE27f6Service', true],
            'App\\Controller\\LocationController:edit' => ['privates', '.service_locator.MrWrXh3', 'get_ServiceLocator_MrWrXh3Service', true],
            'App\\Controller\\LocationController:index' => ['privates', '.service_locator.YNXvnLc', 'get_ServiceLocator_YNXvnLcService', true],
            'App\\Controller\\LocationController:new' => ['privates', '.service_locator.7hCOGnU', 'get_ServiceLocator_7hCOGnUService', true],
            'App\\Controller\\LocationController:show' => ['privates', '.service_locator.dgpf7NO', 'get_ServiceLocator_Dgpf7NOService', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\WeatherController:city' => ['privates', '.service_locator.ckBkmQl', 'get_ServiceLocator_CkBkmQlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ForecastController::delete' => '?',
            'App\\Controller\\ForecastController::edit' => '?',
            'App\\Controller\\ForecastController::index' => '?',
            'App\\Controller\\ForecastController::new' => '?',
            'App\\Controller\\ForecastController::show' => '?',
            'App\\Controller\\LocationController::delete' => '?',
            'App\\Controller\\LocationController::edit' => '?',
            'App\\Controller\\LocationController::index' => '?',
            'App\\Controller\\LocationController::new' => '?',
            'App\\Controller\\LocationController::show' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\WeatherController::city' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ForecastController:delete' => '?',
            'App\\Controller\\ForecastController:edit' => '?',
            'App\\Controller\\ForecastController:index' => '?',
            'App\\Controller\\ForecastController:new' => '?',
            'App\\Controller\\ForecastController:show' => '?',
            'App\\Controller\\LocationController:delete' => '?',
            'App\\Controller\\LocationController:edit' => '?',
            'App\\Controller\\LocationController:index' => '?',
            'App\\Controller\\LocationController:new' => '?',
            'App\\Controller\\LocationController:show' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\WeatherController:city' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
