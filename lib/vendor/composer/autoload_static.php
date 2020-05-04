<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit004fd18b377fdb3931473cb3ce99e004
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit004fd18b377fdb3931473cb3ce99e004::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit004fd18b377fdb3931473cb3ce99e004::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
