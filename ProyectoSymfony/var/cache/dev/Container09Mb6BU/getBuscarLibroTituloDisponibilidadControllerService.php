<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getBuscarLibroTituloDisponibilidadControllerService.php
namespace ContainerGx2YOkN;
========
namespace Container09Mb6BU;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/Container09Mb6BU/getBuscarLibroTituloDisponibilidadControllerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuscarLibroTituloDisponibilidadControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BuscarLibroTituloDisponibilidadController' shared autowired service.
     *
     * @return \App\Controller\BuscarLibroTituloDisponibilidadController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BuscarLibroTituloDisponibilidadController.php';

        $container->services['App\\Controller\\BuscarLibroTituloDisponibilidadController'] = $instance = new \App\Controller\BuscarLibroTituloDisponibilidadController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\BuscarLibroTituloDisponibilidadController', $container));

        return $instance;
    }
}
