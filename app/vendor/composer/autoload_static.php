<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ebab6dc32ca006b1a67a63e20c04846
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

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'URLify' => 
            array (
                0 => __DIR__ . '/..' . '/jbroadway/urlify',
            ),
        ),
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Detection\\MobileDetect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php',
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'TijsVerkoyen\\Akismet\\Akismet' => __DIR__ . '/..' . '/tijsverkoyen/akismet/Akismet.php',
        'TijsVerkoyen\\Akismet\\Exception' => __DIR__ . '/..' . '/tijsverkoyen/akismet/Exception.php',
        'URLify' => __DIR__ . '/..' . '/jbroadway/urlify/URLify.php',
        'URLifyTest' => __DIR__ . '/..' . '/jbroadway/urlify/tests/URLifyTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ebab6dc32ca006b1a67a63e20c04846::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ebab6dc32ca006b1a67a63e20c04846::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5ebab6dc32ca006b1a67a63e20c04846::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5ebab6dc32ca006b1a67a63e20c04846::$classMap;

        }, null, ClassLoader::class);
    }
}
