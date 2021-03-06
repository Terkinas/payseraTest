<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit108981a5a6894e9ab675bf5ac195fc9b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WebToPay' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay.php',
        'WebToPayException' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPayException.php',
        'WebToPay_CallbackValidator' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/CallbackValidator.php',
        'WebToPay_Exception_Callback' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Exception/Callback.php',
        'WebToPay_Exception_Configuration' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Exception/Configuration.php',
        'WebToPay_Exception_Validation' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Exception/Validation.php',
        'WebToPay_Factory' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Factory.php',
        'WebToPay_PaymentMethod' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/PaymentMethod.php',
        'WebToPay_PaymentMethodCountry' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/PaymentMethodCountry.php',
        'WebToPay_PaymentMethodGroup' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/PaymentMethodGroup.php',
        'WebToPay_PaymentMethodList' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/PaymentMethodList.php',
        'WebToPay_PaymentMethodListProvider' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/PaymentMethodListProvider.php',
        'WebToPay_RequestBuilder' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/RequestBuilder.php',
        'WebToPay_Sign_SS1SignChecker' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Sign/SS1SignChecker.php',
        'WebToPay_Sign_SS2SignChecker' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Sign/SS2SignChecker.php',
        'WebToPay_Sign_SignCheckerInterface' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Sign/SignCheckerInterface.php',
        'WebToPay_SmsAnswerSender' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/SmsAnswerSender.php',
        'WebToPay_UrlBuilder' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/UrlBuilder.php',
        'WebToPay_Util' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/Util.php',
        'WebToPay_WebClient' => __DIR__ . '/..' . '/webtopay/libwebtopay/src/WebToPay/WebClient.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit108981a5a6894e9ab675bf5ac195fc9b::$classMap;

        }, null, ClassLoader::class);
    }
}
