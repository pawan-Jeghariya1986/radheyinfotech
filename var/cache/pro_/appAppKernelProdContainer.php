<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTC2lHMx\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTC2lHMx/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerTC2lHMx.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerTC2lHMx\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerTC2lHMx\appAppKernelProdContainer([
    'container.build_hash' => 'TC2lHMx',
    'container.build_id' => '53304d9b',
    'container.build_time' => 1719408869,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTC2lHMx');