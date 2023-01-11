<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04b195f9de61d0d36391b69fdc45967f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amithk199610\\Contact\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amithk199610\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04b195f9de61d0d36391b69fdc45967f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04b195f9de61d0d36391b69fdc45967f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04b195f9de61d0d36391b69fdc45967f::$classMap;

        }, null, ClassLoader::class);
    }
}