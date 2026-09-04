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
 * Base Konbini Data Convenience Store schema.
 */
class BaseKonbiniDataConvenienceStore
{
    public const SEVEN_ELEVEN = 'seven_eleven';

    public const FAMILY_MART = 'family_mart';

    public const LAWSON = 'lawson';

    public const MINI_STOP = 'mini_stop';

    public const SEICO_MART = 'seico_mart';

    public const PAY_EASY = 'pay_easy';

    public const DAILY_YAMAZAKI = 'daily_yamazaki';

    public const YAMAZAKI_DAILY_STORE = 'yamazaki_daily_store';

    private const _ALL_VALUES = [
        self::SEVEN_ELEVEN,
        self::FAMILY_MART,
        self::LAWSON,
        self::MINI_STOP,
        self::SEICO_MART,
        self::PAY_EASY,
        self::DAILY_YAMAZAKI,
        self::YAMAZAKI_DAILY_STORE
    ];

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
        throw new Exception("$value is invalid for BaseKonbiniDataConvenienceStore.");
    }
}
