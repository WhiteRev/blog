<?php

namespace Container1tgjibx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWelcomeTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\WelcomeType' shared autowired service.
     *
     * @return \App\Form\Type\WelcomeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/WelcomeType.php';

        return $container->privates['App\\Form\\Type\\WelcomeType'] = new \App\Form\Type\WelcomeType();
    }
}