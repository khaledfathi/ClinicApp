<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2d957953b295bdba7ee649545df17b2
{
    public static $files = array (
        '5b233dfeefb740851b132d0ec9c3c92e' => __DIR__ . '/../..' . '/src/Helper/URI.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Clinicsys\\Core\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Clinicsys\\Core\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2d957953b295bdba7ee649545df17b2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2d957953b295bdba7ee649545df17b2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2d957953b295bdba7ee649545df17b2::$classMap;

        }, null, ClassLoader::class);
    }
}
