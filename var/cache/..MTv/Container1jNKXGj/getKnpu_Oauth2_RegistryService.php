<?php

namespace Container1jNKXGj;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.registry' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\ClientRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4) . '' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'knpuniversity' . \DIRECTORY_SEPARATOR . 'oauth2-client-bundle' . \DIRECTORY_SEPARATOR . 'src' . \DIRECTORY_SEPARATOR . 'Client' . \DIRECTORY_SEPARATOR . 'ClientRegistry.php';

        return $container->services['knpu.oauth2.registry'] = new \KnpU\OAuth2ClientBundle\Client\ClientRegistry($container, []);
    }
}