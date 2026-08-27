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
 * Bank account state (有効・無効・登録失敗). Only an `active` account can have transfers registered against it.
 * `registration_failed` means the bank rejected the account details.
 */
class DirectDebitBankAccountStatus
{
    public const ACTIVE = 'active';

    public const INACTIVE = 'inactive';

    public const REGISTRATION_FAILED = 'registration_failed';

    private const _ALL_VALUES = [self::ACTIVE, self::INACTIVE, self::REGISTRATION_FAILED];

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
        throw new Exception("$value is invalid for DirectDebitBankAccountStatus.");
    }
}
