<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8488ab7ca4ad405d1b36edd4bba255c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8488ab7ca4ad405d1b36edd4bba255c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8488ab7ca4ad405d1b36edd4bba255c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
