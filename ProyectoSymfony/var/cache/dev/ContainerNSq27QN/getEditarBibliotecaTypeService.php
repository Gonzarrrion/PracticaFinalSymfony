<?php

namespace ContainerNSq27QN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditarBibliotecaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EditarBibliotecaType' shared autowired service.
     *
     * @return \App\Form\EditarBibliotecaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EditarBibliotecaType.php';

        return $container->privates['App\\Form\\EditarBibliotecaType'] = new \App\Form\EditarBibliotecaType();
    }
}
