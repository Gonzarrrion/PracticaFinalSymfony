<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getConsole_Command_SecretsEncryptFromLocalService.php
namespace ContainerN3IxC6q;
========
namespace ContainerTy2vig9;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerTy2vig9/getConsole_Command_SecretsEncryptFromLocalService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_SecretsEncryptFromLocalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $container->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($container->privates['secrets.vault'] ?? $container->load('getSecrets_VaultService')), ($container->privates['secrets.local_vault'] ??= new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local'))));

        $instance->setName('secrets:encrypt-from-local');
        $instance->setDescription('Encrypt all local secrets to the vault');

        return $instance;
    }
}
