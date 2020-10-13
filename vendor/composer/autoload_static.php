<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86ac8cba4093fcc313800e313dcd4bd4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smsplateform\\Payplus\\Client\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smsplateform\\Payplus\\Client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Pay' => __DIR__ . '/../..' . '/binary/pay-php-gateway.php',
        'Pay_Checkout' => __DIR__ . '/../..' . '/binary/pay/checkout.php',
        'Pay_Checkout_Invoice' => __DIR__ . '/../..' . '/binary/pay/checkout/checkout_invoice.php',
        'Pay_Checkout_Store' => __DIR__ . '/../..' . '/binary/pay/checkout/store.php',
        'Pay_CustomData' => __DIR__ . '/../..' . '/binary/pay/customdata.php',
        'Pay_Setup' => __DIR__ . '/../..' . '/binary/pay/setup.php',
        'Pay_Utilities' => __DIR__ . '/../..' . '/binary/pay/utilities.php',
        'Requests' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests.php',
        'Requests_Auth' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Auth.php',
        'Requests_Auth_Basic' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Auth/Basic.php',
        'Requests_Exception' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception.php',
        'Requests_Exception_HTTP' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP.php',
        'Requests_Exception_HTTP_400' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/400.php',
        'Requests_Exception_HTTP_401' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/401.php',
        'Requests_Exception_HTTP_402' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/402.php',
        'Requests_Exception_HTTP_403' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/403.php',
        'Requests_Exception_HTTP_404' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/404.php',
        'Requests_Exception_HTTP_405' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/405.php',
        'Requests_Exception_HTTP_406' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/406.php',
        'Requests_Exception_HTTP_407' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/407.php',
        'Requests_Exception_HTTP_408' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/408.php',
        'Requests_Exception_HTTP_409' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/409.php',
        'Requests_Exception_HTTP_410' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/410.php',
        'Requests_Exception_HTTP_411' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/411.php',
        'Requests_Exception_HTTP_412' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/412.php',
        'Requests_Exception_HTTP_413' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/413.php',
        'Requests_Exception_HTTP_414' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/414.php',
        'Requests_Exception_HTTP_415' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/415.php',
        'Requests_Exception_HTTP_416' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/416.php',
        'Requests_Exception_HTTP_417' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/417.php',
        'Requests_Exception_HTTP_418' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/418.php',
        'Requests_Exception_HTTP_428' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/428.php',
        'Requests_Exception_HTTP_429' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/429.php',
        'Requests_Exception_HTTP_431' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/431.php',
        'Requests_Exception_HTTP_500' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/500.php',
        'Requests_Exception_HTTP_501' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/501.php',
        'Requests_Exception_HTTP_502' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/502.php',
        'Requests_Exception_HTTP_503' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/503.php',
        'Requests_Exception_HTTP_504' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/504.php',
        'Requests_Exception_HTTP_505' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/505.php',
        'Requests_Exception_HTTP_511' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/511.php',
        'Requests_Exception_HTTP_Unknown' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Exception/HTTP/Unknown.php',
        'Requests_Hooks' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Hooks.php',
        'Requests_IDNAEncoder' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/IDNAEncoder.php',
        'Requests_IPv6' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/IPv6.php',
        'Requests_IRI' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/IRI.php',
        'Requests_Response' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Response.php',
        'Requests_Response_Headers' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Response/Headers.php',
        'Requests_Transport' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Transport.php',
        'Requests_Transport_cURL' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Transport/cURL.php',
        'Requests_Transport_fsockopen' => __DIR__ . '/../..' . '/binary/pay/libraries/Requests/Transport/fsockopen.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86ac8cba4093fcc313800e313dcd4bd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86ac8cba4093fcc313800e313dcd4bd4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86ac8cba4093fcc313800e313dcd4bd4::$classMap;

        }, null, ClassLoader::class);
    }
}