<?php

namespace Container1jNKXGj;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\UserController' shared autowired service.
     *
     * @return \App\Controller\User\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4) . '' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'symfony' . \DIRECTORY_SEPARATOR . 'framework-bundle' . \DIRECTORY_SEPARATOR . 'Controller' . \DIRECTORY_SEPARATOR . 'AbstractController.php';
        include_once \dirname(__DIR__, 4) . '' . \DIRECTORY_SEPARATOR . 'src' . \DIRECTORY_SEPARATOR . 'Controller' . \DIRECTORY_SEPARATOR . 'User' . \DIRECTORY_SEPARATOR . 'UserController.php';

        $container->services['App\\Controller\\User\\UserController'] = $instance = new \App\Controller\User\UserController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\RoomRepository'] ?? $container->load('getRoomRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\User\\UserController', $container));

        return $instance;
    }
}
