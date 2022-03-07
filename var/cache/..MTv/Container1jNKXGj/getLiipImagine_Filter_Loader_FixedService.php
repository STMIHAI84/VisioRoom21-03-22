<?php

namespace Container1jNKXGj;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_FixedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'liip_imagine.filter.loader.fixed' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4) . '' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'liip' . \DIRECTORY_SEPARATOR . 'imagine-bundle' . \DIRECTORY_SEPARATOR . 'Imagine' . \DIRECTORY_SEPARATOR . 'Filter' . \DIRECTORY_SEPARATOR . 'Loader' . \DIRECTORY_SEPARATOR . 'LoaderInterface.php';
        include_once \dirname(__DIR__, 4) . '' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'liip' . \DIRECTORY_SEPARATOR . 'imagine-bundle' . \DIRECTORY_SEPARATOR . 'Imagine' . \DIRECTORY_SEPARATOR . 'Filter' . \DIRECTORY_SEPARATOR . 'Loader' . \DIRECTORY_SEPARATOR . 'FixedFilterLoader.php';

        return $container->services['liip_imagine.filter.loader.fixed'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FixedFilterLoader();
    }
}
