<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php
namespace ContainerN3IxC6q;
========
namespace ContainerXUVpd4d;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerXUVpd4d/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/AbstractSchemaListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/SchemaListener/DoctrineDbalCacheAdapterSchemaListener.php';

        return $container->privates['doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener([]);
    }
}
