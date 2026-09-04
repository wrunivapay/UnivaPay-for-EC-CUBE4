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
 * Payment status of a bank transfer charge.
 */
class BankTransferPaymentStatus
{
    public const UNPAID = 'unpaid';

    public const INSUFFICIENT = 'insufficient';

    public const EXACT = 'exact';

    public const EXCEEDED = 'exceeded';

    private const _ALL_VALUES = [self::UNPAID, self::INSUFFICIENT, self::EXACT, self::EXCEEDED];

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
        throw new Exception("$value is invalid for BankTransferPaymentStatus.");
    }
}
