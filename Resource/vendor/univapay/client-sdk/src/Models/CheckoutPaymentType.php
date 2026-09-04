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
 * Payment type identifier used throughout the checkout configuration.
 */
class CheckoutPaymentType
{
    public const CARD = 'card';

    public const QR_SCAN = 'qr_scan';

    public const QR_MERCHANT = 'qr_merchant';

    public const KONBINI = 'konbini';

    public const APPLE_PAY = 'apple_pay';

    public const PAIDY = 'paidy';

    public const ONLINE = 'online';

    public const BANK_TRANSFER = 'bank_transfer';

    private const _ALL_VALUES = [
        self::CARD,
        self::QR_SCAN,
        self::QR_MERCHANT,
        self::KONBINI,
        self::APPLE_PAY,
        self::PAIDY,
        self::ONLINE,
        self::BANK_TRANSFER
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
        throw new Exception("$value is invalid for CheckoutPaymentType.");
    }
}
