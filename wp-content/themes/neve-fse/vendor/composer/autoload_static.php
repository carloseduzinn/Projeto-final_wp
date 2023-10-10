<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite57c9165c4575d674f610b58aacd0645
{
    public static $files = array (
        'fe88c840db82e7640660da3361c54fc8' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NeveFSE\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NeveFSE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'NeveFSE\\Admin' => __DIR__ . '/../..' . '/inc/Admin.php',
        'NeveFSE\\Assets_Manager' => __DIR__ . '/../..' . '/inc/Assets_Manager.php',
        'NeveFSE\\Block_Patterns' => __DIR__ . '/../..' . '/inc/Block_Patterns.php',
        'NeveFSE\\Block_Styles' => __DIR__ . '/../..' . '/inc/Block_Styles.php',
        'NeveFSE\\Constants' => __DIR__ . '/../..' . '/inc/Constants.php',
        'NeveFSE\\Core' => __DIR__ . '/../..' . '/inc/Core.php',
        'NeveFSE\\Neve_Mods' => __DIR__ . '/../..' . '/inc/Neve_Mods.php',
        'NeveFSE\\Starter_Content' => __DIR__ . '/../..' . '/inc/Starter_Content.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite57c9165c4575d674f610b58aacd0645::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite57c9165c4575d674f610b58aacd0645::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite57c9165c4575d674f610b58aacd0645::$classMap;

        }, null, ClassLoader::class);
    }
}
