<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getCache_SystemService.php
namespace ContainerGx2YOkN;
========
namespace ContainerSO4lYH1;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerSO4lYH1/getCache_ValidatorExpressionLanguageService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_SystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/src/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerGx2YOkN/getCache_SystemService.php
        return $container->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('1avQzTQy4b', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), ($container->privates['logger'] ?? self::getLoggerService($container)));
========
        return $container->services['cache.validator_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qwKTBbabDJ', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), ($container->privates['logger'] ?? self::getLoggerService($container)));
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerSO4lYH1/getCache_ValidatorExpressionLanguageService.php
    }
}
