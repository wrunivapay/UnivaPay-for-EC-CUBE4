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
 * Store processing mode reflected in the checkout configuration: `live` and `test` reflect the
 * credential used to authenticate, while `live_test` is reserved for privileged callers testing
 * against live-mode data.
 */
class CheckoutMode
{
    public const LIVE = 'live';

    public const TEST = 'test';

    public const LIVE_TEST = 'live_test';

    private const _ALL_VALUES = [self::LIVE, self::TEST, self::LIVE_TEST];

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
        throw new Exception("$value is invalid for CheckoutMode.");
    }
}
