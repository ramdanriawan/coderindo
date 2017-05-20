<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite60ce1ace31f3ace68571b12622df7ec
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite60ce1ace31f3ace68571b12622df7ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite60ce1ace31f3ace68571b12622df7ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
