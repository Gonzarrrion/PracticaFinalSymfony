<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEhxb8Zl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEhxb8Zl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEhxb8Zl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEhxb8Zl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEhxb8Zl\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ehxb8Zl',
    'container.build_id' => '62fd41a3',
    'container.build_time' => 1715686572,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEhxb8Zl');
