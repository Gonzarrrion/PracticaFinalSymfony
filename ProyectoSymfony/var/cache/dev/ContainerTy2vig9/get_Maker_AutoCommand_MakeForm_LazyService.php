<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/get_Maker_AutoCommand_MakeForm_LazyService.php
namespace ContainerN3IxC6q;
========
namespace ContainerTy2vig9;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerTy2vig9/get_Maker_AutoCommand_MakeForm_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeForm_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_form.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_form.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:form', [], 'Create a new form class', false, #[\Closure(name: 'maker.auto_command.make_form', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] fn (): \Symfony\Bundle\MakerBundle\Command\MakerCommand => ($container->privates['maker.auto_command.make_form'] ?? $container->load('getMaker_AutoCommand_MakeFormService')));
    }
}
