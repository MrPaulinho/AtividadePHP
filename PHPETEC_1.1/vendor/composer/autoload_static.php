<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit863a248fc92df72998b0d43753e813fc
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit863a248fc92df72998b0d43753e813fc::$classMap;

        }, null, ClassLoader::class);
    }
}
