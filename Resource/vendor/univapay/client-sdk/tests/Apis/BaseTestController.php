<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\Apis;

use Core\TestCase\CoreTestCase;
use PHPUnit\Framework\TestCase;
use UnivaPay\Tests\ClientFactory;
use UnivaPay\Tests\HttpCallbackCatcher;
use UnivaPay\UnivapayClientSdkClient;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): UnivapayClientSdkClient
    {
        self::$callbackCatcher = new HttpCallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
