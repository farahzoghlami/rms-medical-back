<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNFkxdbj\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNFkxdbj/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNFkxdbj.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNFkxdbj\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNFkxdbj\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NFkxdbj',
    'container.build_id' => '6e518d89',
    'container.build_time' => 1583262421,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNFkxdbj');
