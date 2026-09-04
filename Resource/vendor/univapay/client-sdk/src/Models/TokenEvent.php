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
 * Event type discriminator — `token_created`, `token_updated`, `token_three_d_s_updated`,
 * `token_cvv_auth_updated`, `token_cvv_auth_check_updated`, `token_replaced`, or
 * `recurring_token_deleted`.
 */
class TokenEvent
{
    public const TOKEN_CREATED = 'token_created';

    public const TOKEN_UPDATED = 'token_updated';

    public const TOKEN_THREE_D_S_UPDATED = 'token_three_d_s_updated';

    public const TOKEN_CVV_AUTH_UPDATED = 'token_cvv_auth_updated';

    public const TOKEN_CVV_AUTH_CHECK_UPDATED = 'token_cvv_auth_check_updated';

    public const TOKEN_REPLACED = 'token_replaced';

    public const RECURRING_TOKEN_DELETED = 'recurring_token_deleted';

    private const _ALL_VALUES = [
        self::TOKEN_CREATED,
        self::TOKEN_UPDATED,
        self::TOKEN_THREE_D_S_UPDATED,
        self::TOKEN_CVV_AUTH_UPDATED,
        self::TOKEN_CVV_AUTH_CHECK_UPDATED,
        self::TOKEN_REPLACED,
        self::RECURRING_TOKEN_DELETED
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
        throw new Exception("$value is invalid for TokenEvent.");
    }
}
