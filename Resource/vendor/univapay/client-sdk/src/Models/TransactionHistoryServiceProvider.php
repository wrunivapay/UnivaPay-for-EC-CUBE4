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
 * The processor or service provider that handled the payment.
 */
class TransactionHistoryServiceProvider
{
    public const CREDIT = 'credit';

    public const CONVENIENCE = 'convenience';

    public const BANK_TRANSFER = 'bank_transfer';

    public const PAIDY = 'paidy';

    public const PAY_PAY = 'pay_pay';

    public const ALIPAY = 'alipay';

    public const WE_CHAT = 'we_chat';

    public const DOCOMO = 'docomo';

    public const MERCARI = 'mercari';

    public const AU = 'au';

    public const RAKUTEN = 'rakuten';

    public const BARTONG = 'bartong';

    public const JKOPAY = 'jkopay';

    public const GINKO_PAY = 'ginko_pay';

    public const AEON_PAY = 'aeon_pay';

    public const EROMNET = 'eromnet';

    public const TEST = 'test';

    private const _ALL_VALUES = [
        self::CREDIT,
        self::CONVENIENCE,
        self::BANK_TRANSFER,
        self::PAIDY,
        self::PAY_PAY,
        self::ALIPAY,
        self::WE_CHAT,
        self::DOCOMO,
        self::MERCARI,
        self::AU,
        self::RAKUTEN,
        self::BARTONG,
        self::JKOPAY,
        self::GINKO_PAY,
        self::AEON_PAY,
        self::EROMNET,
        self::TEST
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
        throw new Exception("$value is invalid for TransactionHistoryServiceProvider.");
    }
}
