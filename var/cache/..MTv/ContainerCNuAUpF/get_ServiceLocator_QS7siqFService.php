<?php

namespace ContainerCNuAUpF;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QS7siqFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QS7siqF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QS7siqF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'room' => ['privates', '.errored..service_locator.QS7siqF.App\\Entity\\Room', NULL, 'Cannot autowire service ".service_locator.QS7siqF": it references class "App\\Entity\\Room" but no such service exists.'],
        ], [
            'room' => 'App\\Entity\\Room',
        ]);
    }
}
