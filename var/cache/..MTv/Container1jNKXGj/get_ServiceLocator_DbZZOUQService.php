<?php

namespace Container1jNKXGj;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DbZZOUQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dbZZOUQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dbZZOUQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.jWC0iAM', 'get_ServiceLocator_JWC0iAMService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.SxWgT3I', 'get_ServiceLocator_SxWgT3IService', true],
            'App\\Controller\\Room\\RoomController::add' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\Room\\RoomController::delete' => ['privates', '.service_locator.kmeuOUR', 'get_ServiceLocator_KmeuOURService', true],
            'App\\Controller\\Room\\RoomController::edit' => ['privates', '.service_locator.kmeuOUR', 'get_ServiceLocator_KmeuOURService', true],
            'App\\Controller\\Room\\RoomController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Room\\RoomController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Room\\RoomController::show' => ['privates', '.service_locator.QS7siqF', 'get_ServiceLocator_QS7siqFService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.hy4rLC4', 'get_ServiceLocator_Hy4rLC4Service', true],
            'App\\Controller\\User\\UserController::delete' => ['privates', '.service_locator.PaJQGxZ', 'get_ServiceLocator_PaJQGxZService', true],
            'App\\Controller\\User\\UserController::form' => ['privates', '.service_locator.1RVest6', 'get_ServiceLocator_1RVest6Service', true],
            'App\\Controller\\User\\UserController::forme' => ['privates', '.service_locator.1RVest6', 'get_ServiceLocator_1RVest6Service', true],
            'App\\Controller\\User\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.jWC0iAM', 'get_ServiceLocator_JWC0iAMService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.SxWgT3I', 'get_ServiceLocator_SxWgT3IService', true],
            'App\\Controller\\Room\\RoomController:add' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\Room\\RoomController:delete' => ['privates', '.service_locator.kmeuOUR', 'get_ServiceLocator_KmeuOURService', true],
            'App\\Controller\\Room\\RoomController:edit' => ['privates', '.service_locator.kmeuOUR', 'get_ServiceLocator_KmeuOURService', true],
            'App\\Controller\\Room\\RoomController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Room\\RoomController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Room\\RoomController:show' => ['privates', '.service_locator.QS7siqF', 'get_ServiceLocator_QS7siqFService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.hy4rLC4', 'get_ServiceLocator_Hy4rLC4Service', true],
            'App\\Controller\\User\\UserController:delete' => ['privates', '.service_locator.PaJQGxZ', 'get_ServiceLocator_PaJQGxZService', true],
            'App\\Controller\\User\\UserController:form' => ['privates', '.service_locator.1RVest6', 'get_ServiceLocator_1RVest6Service', true],
            'App\\Controller\\User\\UserController:forme' => ['privates', '.service_locator.1RVest6', 'get_ServiceLocator_1RVest6Service', true],
            'App\\Controller\\User\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\Room\\RoomController::add' => '?',
            'App\\Controller\\Room\\RoomController::delete' => '?',
            'App\\Controller\\Room\\RoomController::edit' => '?',
            'App\\Controller\\Room\\RoomController::index' => '?',
            'App\\Controller\\Room\\RoomController::new' => '?',
            'App\\Controller\\Room\\RoomController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\User\\UserController::delete' => '?',
            'App\\Controller\\User\\UserController::form' => '?',
            'App\\Controller\\User\\UserController::forme' => '?',
            'App\\Controller\\User\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\Room\\RoomController:add' => '?',
            'App\\Controller\\Room\\RoomController:delete' => '?',
            'App\\Controller\\Room\\RoomController:edit' => '?',
            'App\\Controller\\Room\\RoomController:index' => '?',
            'App\\Controller\\Room\\RoomController:new' => '?',
            'App\\Controller\\Room\\RoomController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\User\\UserController:delete' => '?',
            'App\\Controller\\User\\UserController:form' => '?',
            'App\\Controller\\User\\UserController:forme' => '?',
            'App\\Controller\\User\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
