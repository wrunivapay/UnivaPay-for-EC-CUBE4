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
 * Event type discriminator — `subscription_created`, `subscription_payment`, `subscription_completed`,
 * `subscription_failure`, `subscription_canceled`, or `subscription_suspended`.
 */
class SubscriptionEvent
{
    public const SUBSCRIPTION_CREATED = 'subscription_created';

    public const SUBSCRIPTION_PAYMENT = 'subscription_payment';

    public const SUBSCRIPTION_COMPLETED = 'subscription_completed';

    public const SUBSCRIPTION_FAILURE = 'subscription_failure';

    public const SUBSCRIPTION_CANCELED = 'subscription_canceled';

    public const SUBSCRIPTION_SUSPENDED = 'subscription_suspended';

    private const _ALL_VALUES = [
        self::SUBSCRIPTION_CREATED,
        self::SUBSCRIPTION_PAYMENT,
        self::SUBSCRIPTION_COMPLETED,
        self::SUBSCRIPTION_FAILURE,
        self::SUBSCRIPTION_CANCELED,
        self::SUBSCRIPTION_SUSPENDED
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
        throw new Exception("$value is invalid for SubscriptionEvent.");
    }
}
