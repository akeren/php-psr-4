<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3bbd32887e90fdeefa01df94de5649cb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CompanyName\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CompanyName\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/CompanyName',
        ),
    );

    public static $classMap = array (
        'CompanyName\\Controllers\\Music' => __DIR__ . '/../..' . '/app/CompanyName/controllers/Music.php',
        'CompanyName\\Models\\Post' => __DIR__ . '/../..' . '/app/CompanyName/models/Post.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3bbd32887e90fdeefa01df94de5649cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3bbd32887e90fdeefa01df94de5649cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3bbd32887e90fdeefa01df94de5649cb::$classMap;

        }, null, ClassLoader::class);
    }
}
