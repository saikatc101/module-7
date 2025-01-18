<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21bed05a3373ae40fb6e09f4e23b8042
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21bed05a3373ae40fb6e09f4e23b8042::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21bed05a3373ae40fb6e09f4e23b8042::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit21bed05a3373ae40fb6e09f4e23b8042::$classMap;

        }, null, ClassLoader::class);
    }
}
