<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47aa41cb651c8a978066cce34a2ebfcb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CompropagoSdk\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CompropagoSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk',
        ),
    );

    public static $classMap = array (
        'CompropagoSdk\\Client' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Client.php',
        'CompropagoSdk\\Extern\\TransactTables' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Extern/TransactTables.php',
        'CompropagoSdk\\Factory\\Factory' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Factory.php',
        'CompropagoSdk\\Factory\\Models\\CpOrderInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/CpOrderInfo.php',
        'CompropagoSdk\\Factory\\Models\\Customer' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/Customer.php',
        'CompropagoSdk\\Factory\\Models\\EvalAuthInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/EvalAuthInfo.php',
        'CompropagoSdk\\Factory\\Models\\FeeDetails' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/FeeDetails.php',
        'CompropagoSdk\\Factory\\Models\\InstructionDetails' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/InstructionDetails.php',
        'CompropagoSdk\\Factory\\Models\\Instructions' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/Instructions.php',
        'CompropagoSdk\\Factory\\Models\\NewOrderInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/NewOrderInfo.php',
        'CompropagoSdk\\Factory\\Models\\OrderInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/OrderInfo.php',
        'CompropagoSdk\\Factory\\Models\\PlaceOrderInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/PlaceOrderInfo.php',
        'CompropagoSdk\\Factory\\Models\\Provider' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/Provider.php',
        'CompropagoSdk\\Factory\\Models\\SmsData' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/SmsData.php',
        'CompropagoSdk\\Factory\\Models\\SmsInfo' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/SmsInfo.php',
        'CompropagoSdk\\Factory\\Models\\SmsObject' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/SmsObject.php',
        'CompropagoSdk\\Factory\\Models\\Webhook' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Models/Webhook.php',
        'CompropagoSdk\\Factory\\Serialize' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Factory/Serialize.php',
        'CompropagoSdk\\Service' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Service.php',
        'CompropagoSdk\\Tools\\Http' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Tools/Http.php',
        'CompropagoSdk\\Tools\\Request' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Tools/Request.php',
        'CompropagoSdk\\Tools\\Validations' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/Tools/Validations.php',
        'CompropagoSdk\\UnitTest\\Test' => __DIR__ . '/..' . '/compropago/php-sdk/CompropagoSdk/UnitTest/Test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47aa41cb651c8a978066cce34a2ebfcb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47aa41cb651c8a978066cce34a2ebfcb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit47aa41cb651c8a978066cce34a2ebfcb::$classMap;

        }, null, ClassLoader::class);
    }
}
