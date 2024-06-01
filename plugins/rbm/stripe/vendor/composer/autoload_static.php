<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7d83f7865c4723b21ca54df76ea8f0c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7d83f7865c4723b21ca54df76ea8f0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7d83f7865c4723b21ca54df76ea8f0c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7d83f7865c4723b21ca54df76ea8f0c::$classMap;

        }, null, ClassLoader::class);
    }
}
