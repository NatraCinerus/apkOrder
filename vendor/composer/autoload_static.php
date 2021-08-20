<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3067f52bcd381011d27fa2c54309d853
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3067f52bcd381011d27fa2c54309d853::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3067f52bcd381011d27fa2c54309d853::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3067f52bcd381011d27fa2c54309d853::$classMap;

        }, null, ClassLoader::class);
    }
}
