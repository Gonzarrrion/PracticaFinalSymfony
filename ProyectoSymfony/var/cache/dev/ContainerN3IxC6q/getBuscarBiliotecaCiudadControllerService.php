<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getBuscarBiliotecaCiudadControllerService.php
namespace ContainerN3IxC6q;
========
namespace ContainerKHPLf9n;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerKHPLf9n/getBuscarBiliotecaCiudadControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarBiliotecaCiudadControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BuscarBiliotecaCiudadController' shared autowired service.
     *
     * @return \App\Controller\BuscarBiliotecaCiudadController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BuscarBiliotecaCiudadController.php';

        $container->services['App\\Controller\\BuscarBiliotecaCiudadController'] = $instance = new \App\Controller\BuscarBiliotecaCiudadController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\BuscarBiliotecaCiudadController', $container));

        return $instance;
    }
}
