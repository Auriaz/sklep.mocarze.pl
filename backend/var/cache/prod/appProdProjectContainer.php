<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB59v8sx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB59v8sx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerB59v8sx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerB59v8sx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerB59v8sx\appProdProjectContainer([
    'container.build_hash' => 'B59v8sx',
    'container.build_id' => 'a0831496',
    'container.build_time' => 1578759364,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB59v8sx');
