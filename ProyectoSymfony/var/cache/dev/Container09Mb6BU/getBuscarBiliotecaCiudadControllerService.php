<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getBuscarBiliotecaCiudadControllerService.php
namespace ContainerGx2YOkN;
========
namespace Container09Mb6BU;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/Container09Mb6BU/getBuscarBiliotecaCiudadControllerService.php

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
