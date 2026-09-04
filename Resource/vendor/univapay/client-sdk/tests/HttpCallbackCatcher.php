<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests;

use Core\Types\CallbackCatcher;

class HttpCallbackCatcher extends CallbackCatcher
{
    private static $preferHeader = null;

    public function setPreferHeader(?string $preferHeader): void
    {
        self::$preferHeader = $preferHeader;
    }

    public function onBeforeRequest($request): void
    {
        if (self::$preferHeader !== null && $request !== null && method_exists($request, 'addHeader')) {
            $request->addHeader('Prefer', self::$preferHeader);
        }
        parent::onBeforeRequest($request);
    }

    public function callOnBeforeWithConversion(\CoreInterfaces\Core\Request\RequestInterface $request, \CoreInterfaces\Sdk\ConverterInterface $converter)
    {
        if (self::$preferHeader !== null && $request !== null && method_exists($request, 'addHeader')) {
            $request->addHeader('Prefer', self::$preferHeader);
        }
        parent::callOnBeforeWithConversion($request, $converter);
    }
}
