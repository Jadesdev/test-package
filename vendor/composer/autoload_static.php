<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita55ce2bbea66fad4e083d5783614a168
{
    public static $files = array (
        '42c0c20c825d4e40658b7e0c9b0f328d' => __DIR__ . '/../..' . '/src/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jayflashy\\LicenseChecker\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jayflashy\\LicenseChecker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita55ce2bbea66fad4e083d5783614a168::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita55ce2bbea66fad4e083d5783614a168::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita55ce2bbea66fad4e083d5783614a168::$classMap;

        }, null, ClassLoader::class);
    }
}