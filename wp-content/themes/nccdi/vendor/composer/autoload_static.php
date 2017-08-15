<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6d9d0d4acfd7c6ad4eb31e1366ddbd0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6d9d0d4acfd7c6ad4eb31e1366ddbd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6d9d0d4acfd7c6ad4eb31e1366ddbd0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}