<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * (Online) How the client should execute the token.  - `sdk` / `app`: Direct use in native app
 * environments/SDKs. - `web`: Direct use in special extended browser environments. - `http_get` /
 * `http_post`: Execute directly in a new browser window or iframe.
 */
class IssuerTokenCallMethod
{
    public const HTTP_GET = 'http_get';

    public const HTTP_POST = 'http_post';

    public const SDK = 'sdk';

    public const WEB = 'web';

    public const APP = 'app';

    private const _ALL_VALUES = [self::HTTP_GET, self::HTTP_POST, self::SDK, self::WEB, self::APP];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for IssuerTokenCallMethod.");
    }
}
