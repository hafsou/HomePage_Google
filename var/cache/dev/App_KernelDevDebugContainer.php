<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIpsR1vt\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIpsR1vt/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIpsR1vt.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIpsR1vt\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIpsR1vt\App_KernelDevDebugContainer([
    'container.build_hash' => 'IpsR1vt',
    'container.build_id' => '1175c899',
    'container.build_time' => 1586482121,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIpsR1vt');
