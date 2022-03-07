<?php

namespace Container1jNKXGj;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KmeuOURService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kmeuOUR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kmeuOUR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'room' => ['privates', '.errored..service_locator.kmeuOUR.App\\Entity\\Room', NULL, 'Cannot autowire service ".service_locator.kmeuOUR": it references class "App\\Entity\\Room" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'room' => 'App\\Entity\\Room',
        ]);
    }
}
