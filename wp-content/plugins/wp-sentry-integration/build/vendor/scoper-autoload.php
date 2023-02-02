<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInit7eed52de2ed39e5525c50672b3942e39', false) && !interface_exists('ComposerAutoloaderInit7eed52de2ed39e5525c50672b3942e39', false) && !trait_exists('ComposerAutoloaderInit7eed52de2ed39e5525c50672b3942e39', false)) {
    spl_autoload_call('WPSentry\ScopedVendor\ComposerAutoloaderInit7eed52de2ed39e5525c50672b3942e39');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('includeIfExists')) {
    function includeIfExists() {
        return \WPSentry\ScopedVendor\includeIfExists(...func_get_args());
    }
}
if (!function_exists('composerRequire7eed52de2ed39e5525c50672b3942e39')) {
    function composerRequire7eed52de2ed39e5525c50672b3942e39() {
        return \WPSentry\ScopedVendor\composerRequire7eed52de2ed39e5525c50672b3942e39(...func_get_args());
    }
}

return $loader;