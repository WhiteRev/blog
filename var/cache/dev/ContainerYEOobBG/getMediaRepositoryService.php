<?php

namespace ContainerYEOobBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMediaRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\MediaRepository' shared autowired service.
     *
     * @return \App\Repository\MediaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/MediaRepository.php';

        return $container->privates['App\\Repository\\MediaRepository'] = new \App\Repository\MediaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
