<?php

<<<<<<<< Updated upstream:ProyectoSymfony/var/cache/dev/ContainerN3IxC6q/getController_TemplateAttributeListenerService.php
namespace ContainerN3IxC6q;
========
namespace ContainerXUVpd4d;
>>>>>>>> Stashed changes:ProyectoSymfony/var/cache/dev/ContainerXUVpd4d/getController_TemplateAttributeListenerService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getController_TemplateAttributeListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'controller.template_attribute_listener' shared service.
     *
     * @return \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/EventListener/TemplateAttributeListener.php';

        $a = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->privates['controller.template_attribute_listener'])) {
            return $container->privates['controller.template_attribute_listener'];
        }

        return $container->privates['controller.template_attribute_listener'] = new \Symfony\Bridge\Twig\EventListener\TemplateAttributeListener($a);
    }
}
