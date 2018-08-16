<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee643fb09cd3b41a0776b1239e1d1163
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'web\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'web\\' => 
        array (
            0 => __DIR__ . '/../..' . '/web',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee643fb09cd3b41a0776b1239e1d1163::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee643fb09cd3b41a0776b1239e1d1163::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
