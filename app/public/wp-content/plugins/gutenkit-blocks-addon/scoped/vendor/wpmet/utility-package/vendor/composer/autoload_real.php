<?php

namespace GutenkitScopedDependencies;

// autoload_real.php @generated by Composer
class ComposerAutoloaderInitdf2f968b85a9349cce2d05f822a26071
{
    private static $loader;
    public static function loadClassLoader($class)
    {
        if ('Composer\\Autoload\\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }
    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }
        \spl_autoload_register(array('GutenkitScopedDependencies\\ComposerAutoloaderInitdf2f968b85a9349cce2d05f822a26071', 'loadClassLoader'), \true, \true);
        self::$loader = $loader = new \GutenkitScopedDependencies\Composer\Autoload\ClassLoader(\dirname(__DIR__));
        \spl_autoload_unregister(array('ComposerAutoloaderInitdf2f968b85a9349cce2d05f822a26071', 'loadClassLoader'));
        require __DIR__ . '/autoload_static.php';
        \call_user_func(\GutenkitScopedDependencies\Composer\Autoload\ComposerStaticInitdf2f968b85a9349cce2d05f822a26071::getInitializer($loader));
        $loader->register(\true);
        return $loader;
    }
}
// autoload_real.php @generated by Composer
\class_alias('GutenkitScopedDependencies\\ComposerAutoloaderInitdf2f968b85a9349cce2d05f822a26071', 'ComposerAutoloaderInitdf2f968b85a9349cce2d05f822a26071', \false);