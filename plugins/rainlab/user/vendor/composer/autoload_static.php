<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd652ed3ffb9e167e92cd1eb49ea9cf4a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd652ed3ffb9e167e92cd1eb49ea9cf4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd652ed3ffb9e167e92cd1eb49ea9cf4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
