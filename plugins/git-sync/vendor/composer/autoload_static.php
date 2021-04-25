<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc058e1b5c686df0909ec1cc39bb5d854
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\GitSync\\' => 20,
            'Grav\\Plugin\\Console\\' => 20,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\GitSync\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Grav\\Plugin\\Console\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cli',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'Grav\\Plugin\\GitSyncPlugin' => __DIR__ . '/../..' . '/git-sync.php',
        'SebastianBergmann\\Git\\Exception' => __DIR__ . '/..' . '/sebastian/git/src/Exception/Exception.php',
        'SebastianBergmann\\Git\\Git' => __DIR__ . '/..' . '/sebastian/git/src/Git.php',
        'SebastianBergmann\\Git\\RuntimeException' => __DIR__ . '/..' . '/sebastian/git/src/Exception/RuntimeException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc058e1b5c686df0909ec1cc39bb5d854::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc058e1b5c686df0909ec1cc39bb5d854::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc058e1b5c686df0909ec1cc39bb5d854::$classMap;

        }, null, ClassLoader::class);
    }
}
