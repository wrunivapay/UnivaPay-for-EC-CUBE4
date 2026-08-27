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
 * Current status of the refund. `pending`: The refund has been created and is being processed.
 * `successful`: The refund was processed successfully. `failed`: The refund was rejected by the
 * gateway. `error`: An unexpected error occurred during processing.
 */
class RefundStatus
{
    public const PENDING = 'pending';

    public const SUCCESSFUL = 'successful';

    public const FAILED = 'failed';

    public const ERROR = 'error';

    private const _ALL_VALUES = [self::PENDING, self::SUCCESSFUL, self::FAILED, self::ERROR];

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
        throw new Exception("$value is invalid for RefundStatus.");
    }
}
