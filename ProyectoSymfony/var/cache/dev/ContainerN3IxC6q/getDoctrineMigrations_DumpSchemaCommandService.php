<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getDoctrineMigrations_DumpSchemaCommandService.php
namespace ContainerN3IxC6q;
========
namespace ContainerARRdM49;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerARRdM49/getDoctrineMigrations_DumpSchemaCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_DumpSchemaCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';

        $container->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand(($container->privates['doctrine.migrations.dependency_factory'] ?? $container->load('getDoctrine_Migrations_DependencyFactoryService')), 'doctrine:migrations:dump-schema');

        $instance->setName('doctrine:migrations:dump-schema');
        $instance->setDescription('Dump the schema for your database to a migration.');

        return $instance;
    }
}
