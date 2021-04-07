<?php

namespace ContainerXskx4Gj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ONm3YS0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oNm3YS0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oNm3YS0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'parrotRepository' => ['privates', 'App\\Repository\\ParrotRepository', 'getParrotRepositoryService', true],
        ], [
            'parrotRepository' => 'App\\Repository\\ParrotRepository',
        ]);
    }
}