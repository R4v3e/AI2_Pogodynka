<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRAXPkqM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRAXPkqM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRAXPkqM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRAXPkqM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRAXPkqM\App_KernelDevDebugContainer([
    'container.build_hash' => 'RAXPkqM',
    'container.build_id' => '3ab00bff',
    'container.build_time' => 1706532944,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRAXPkqM');
