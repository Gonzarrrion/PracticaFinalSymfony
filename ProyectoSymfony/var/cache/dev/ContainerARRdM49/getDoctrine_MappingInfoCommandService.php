<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getDoctrine_MappingInfoCommandService.php
namespace ContainerN3IxC6q;
========
namespace ContainerARRdM49;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerARRdM49/getDoctrine_MappingInfoCommandService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_MappingInfoCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\InfoCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/AbstractEntityManagerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/InfoCommand.php';

        $container->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\InfoCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }
}
