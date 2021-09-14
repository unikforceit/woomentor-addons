<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8ab8da1e405711f9828950eadd54b65
{
    public static $files = array (
        '7681fa2c026a80897e746efc069d5879' => __DIR__ . '/../..' . '/includes/codestar-framework/codestar-framework.php',
        '1c01d6ef906adbf591e12a4a73198e88' => __DIR__ . '/../..' . '/helpers/helpers.php',
        '78efd2ad2e874d7c30f73ea58053fbec' => __DIR__ . '/../..' . '/helpers/admin-options.php',
        '2ed3697b184f77c8f16bbf7b6adfe604' => __DIR__ . '/../..' . '/includes/builder-functions.php',
        '56d3e83728cb51bfde461451f21484f0' => __DIR__ . '/../..' . '/includes/woo-data.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UnikForce\\UnikForce\\Includes\\' => 29,
            'UnikForce\\UnikForce\\Frontend\\' => 29,
            'UnikForce\\UnikForce\\Admin\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UnikForce\\UnikForce\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'UnikForce\\UnikForce\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/frontend',
        ),
        'UnikForce\\UnikForce\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8ab8da1e405711f9828950eadd54b65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8ab8da1e405711f9828950eadd54b65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8ab8da1e405711f9828950eadd54b65::$classMap;

        }, null, ClassLoader::class);
    }
}
