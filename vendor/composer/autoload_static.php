<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9381f6f84908d54452ad7bee9a51f48b
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9381f6f84908d54452ad7bee9a51f48b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9381f6f84908d54452ad7bee9a51f48b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
