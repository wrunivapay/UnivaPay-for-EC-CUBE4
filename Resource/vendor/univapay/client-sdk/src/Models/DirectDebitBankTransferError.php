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
 * Reason a transfer failed, as reported by the bank.
 * | Value | Meaning | | :--- | :--- | | `insufficient_funds` | The account did not hold enough money
 * on the debit date. | | `no_deposit_transaction` | The account exists but has no deposit activity. |
 * | `transfer_stopped_by_depositor` | The consumer instructed their bank to stop the debit. | |
 * `no_account_transfer_request` | No valid direct debit mandate is on file for the account. | |
 * `transfer_stopped_by_trustee` | The collecting bank stopped the debit. | | `other_error` | The bank
 * reported a failure outside the categories above. | | `unknown_error` | The failure reason could not
 * be determined. |
 */
class DirectDebitBankTransferError
{
    public const INSUFFICIENT_FUNDS = 'insufficient_funds';

    public const NO_DEPOSIT_TRANSACTION = 'no_deposit_transaction';

    public const TRANSFER_STOPPED_BY_DEPOSITOR = 'transfer_stopped_by_depositor';

    public const NO_ACCOUNT_TRANSFER_REQUEST = 'no_account_transfer_request';

    public const TRANSFER_STOPPED_BY_TRUSTEE = 'transfer_stopped_by_trustee';

    public const OTHER_ERROR = 'other_error';

    public const UNKNOWN_ERROR = 'unknown_error';

    private const _ALL_VALUES = [
        self::INSUFFICIENT_FUNDS,
        self::NO_DEPOSIT_TRANSACTION,
        self::TRANSFER_STOPPED_BY_DEPOSITOR,
        self::NO_ACCOUNT_TRANSFER_REQUEST,
        self::TRANSFER_STOPPED_BY_TRUSTEE,
        self::OTHER_ERROR,
        self::UNKNOWN_ERROR
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
        throw new Exception("$value is invalid for DirectDebitBankTransferError.");
    }
}
