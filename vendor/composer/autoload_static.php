<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e563d6f682fdc12ff5ca849835a16af
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'G' => 
        array (
            'Github\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Github\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/github-api/lib/Github',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e563d6f682fdc12ff5ca849835a16af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e563d6f682fdc12ff5ca849835a16af::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0e563d6f682fdc12ff5ca849835a16af::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
