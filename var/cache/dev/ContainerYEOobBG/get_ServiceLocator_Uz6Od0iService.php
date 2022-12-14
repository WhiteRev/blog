<?php

namespace ContainerYEOobBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uz6Od0iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uz6Od0i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uz6Od0i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepo' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
            'commentRepo' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'articleRepo' => 'App\\Repository\\ArticleRepository',
            'commentRepo' => 'App\\Repository\\CommentRepository',
            'em' => '?',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
