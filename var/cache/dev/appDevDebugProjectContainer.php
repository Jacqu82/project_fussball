<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXlljgmi\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXlljgmi/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXlljgmi.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXlljgmi\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXlljgmi\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xlljgmi',
    'container.build_id' => '42247d9d',
    'container.build_time' => 1548091835,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXlljgmi');
