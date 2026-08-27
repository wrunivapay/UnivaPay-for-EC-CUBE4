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
 * Reason code for a refund.
 */
class TransactionHistoryRefundReason
{
    public const DUPLICATE = 'duplicate';

    public const FRAUD = 'fraud';

    public const CUSTOMER_REQUEST = 'customer_request';

    public const SYSTEM_FAILURE = 'system_failure';

    public const CHARGEBACK = 'chargeback';

    public const CHARGEBACK_FEE_EXEMPT = 'chargeback_fee_exempt';

    public const CHARGEBACK_REVERSE = 'chargeback_reverse';

    private const _ALL_VALUES = [
        self::DUPLICATE,
        self::FRAUD,
        self::CUSTOMER_REQUEST,
        self::SYSTEM_FAILURE,
        self::CHARGEBACK,
        self::CHARGEBACK_FEE_EXEMPT,
        self::CHARGEBACK_REVERSE
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
        throw new Exception("$value is invalid for TransactionHistoryRefundReason.");
    }
}
