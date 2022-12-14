<?php

namespace Container1tgjibx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\ArticleService' shared autowired service.
     *
     * @return \App\Service\ArticleService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ArticleService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/OptionService.php';

        return $container->privates['App\\Service\\ArticleService'] = new \App\Service\ArticleService(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['App\\Repository\\ArticleRepository'] ?? $container->load('getArticleRepositoryService')), new \App\Service\OptionService(($container->privates['App\\Repository\\OptionRepository'] ?? $container->load('getOptionRepositoryService'))), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')));
    }
}
