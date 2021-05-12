<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc11efd0a643d3b45a0e5852439c4f606
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc11efd0a643d3b45a0e5852439c4f606::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc11efd0a643d3b45a0e5852439c4f606::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}