<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec3f395789bbf8a0b2e8bd4f8ce1ee9d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec3f395789bbf8a0b2e8bd4f8ce1ee9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec3f395789bbf8a0b2e8bd4f8ce1ee9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec3f395789bbf8a0b2e8bd4f8ce1ee9d::$classMap;

        }, null, ClassLoader::class);
    }
}