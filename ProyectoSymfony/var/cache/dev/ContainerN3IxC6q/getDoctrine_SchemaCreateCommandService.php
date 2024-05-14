<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getDoctrine_SchemaCreateCommandService.php
namespace ContainerN3IxC6q;
========
namespace ContainerKHPLf9n;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerKHPLf9n/getDoctrine_SchemaCreateCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SchemaCreateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/AbstractEntityManagerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/SchemaTool/CreateCommand.php';

        $container->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:schema:create');

        return $instance;
    }
}
