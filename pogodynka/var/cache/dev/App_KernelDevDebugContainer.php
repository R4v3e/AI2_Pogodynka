<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF2Z8BW8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF2Z8BW8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF2Z8BW8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF2Z8BW8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF2Z8BW8\App_KernelDevDebugContainer([
    'container.build_hash' => 'F2Z8BW8',
    'container.build_id' => 'd4739eec',
    'container.build_time' => 1702642383,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF2Z8BW8');