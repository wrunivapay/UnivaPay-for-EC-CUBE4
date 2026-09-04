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
 * Subscription Period schema.
 */
class SubscriptionPeriod
{
    public const DAILY = 'daily';

    public const WEEKLY = 'weekly';

    public const BIWEEKLY = 'biweekly';

    public const MONTHLY = 'monthly';

    public const QUARTERLY = 'quarterly';

    public const SEMIANNUALLY = 'semiannually';

    public const ANNUALLY = 'annually';

    private const _ALL_VALUES =
        [
            self::DAILY,
            self::WEEKLY,
            self::BIWEEKLY,
            self::MONTHLY,
            self::QUARTERLY,
            self::SEMIANNUALLY,
            self::ANNUALLY
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
        throw new Exception("$value is invalid for SubscriptionPeriod.");
    }
}
