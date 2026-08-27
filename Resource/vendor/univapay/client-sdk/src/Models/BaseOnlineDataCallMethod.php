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
 * Base Online Data Call Method schema.
 */
class BaseOnlineDataCallMethod
{
    public const HTTP_GET = 'http_get';

    public const HTTP_POST = 'http_post';

    public const HTTP_GET_MOBILE = 'http_get_mobile';

    public const SDK = 'sdk';

    public const WEB = 'web';

    public const APP = 'app';

    private const _ALL_VALUES =
        [self::HTTP_GET, self::HTTP_POST, self::HTTP_GET_MOBILE, self::SDK, self::WEB, self::APP];

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
        throw new Exception("$value is invalid for BaseOnlineDataCallMethod.");
    }
}
