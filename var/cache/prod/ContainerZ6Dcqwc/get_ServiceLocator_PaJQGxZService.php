<?php

namespace ContainerZ6Dcqwc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PaJQGxZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.PaJQGxZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PaJQGxZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'user' => ['privates', '.errored..service_locator.PaJQGxZ.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.PaJQGxZ": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
