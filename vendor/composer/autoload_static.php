<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a9dd201cbc59cf74045602a81c4b25e
{
    public static $files = array (
        '16f5b36ae041d3224feb4d31756b1751' => __DIR__ . '/../..' . '/houdunwang/core/functions.php',
        'b9f2db32acabdc3afb29463984d013cc' => __DIR__ . '/../..' . '/system/config/database.php',
        'a82f43b8dc353fe07c050d51a5fadd69' => __DIR__ . '/../..' . '/system/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'h' => 
        array (
            'houdunwang\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'U' => 
        array (
            'Upload\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'houdunwang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/houdunwang',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeguy/upload/src/Upload',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a9dd201cbc59cf74045602a81c4b25e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a9dd201cbc59cf74045602a81c4b25e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
