<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1853160483d1644b96775b9f9fdf2f9a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1853160483d1644b96775b9f9fdf2f9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1853160483d1644b96775b9f9fdf2f9a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}