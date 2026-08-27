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
 * Event type that triggers a webhook notification.
 */
class WebhookTrigger
{
    public const TOKEN_CREATED = 'token_created';

    public const TOKEN_UPDATED = 'token_updated';

    public const TOKEN_THREE_D_S_UPDATED = 'token_three_d_s_updated';

    public const TOKEN_CVV_AUTH_UPDATED = 'token_cvv_auth_updated';

    public const TOKEN_CVV_AUTH_CHECK_UPDATED = 'token_cvv_auth_check_updated';

    public const TOKEN_REPLACED = 'token_replaced';

    public const CHARGE_UPDATED = 'charge_updated';

    public const CHARGE_FINISHED = 'charge_finished';

    public const REFUND_FINISHED = 'refund_finished';

    public const CANCEL_FINISHED = 'cancel_finished';

    public const CUSTOMS_DECLARATION_FINISHED = 'customs_declaration_finished';

    public const RECURRING_TOKEN_DELETED = 'recurring_token_deleted';

    public const BANK_TRANSFER_STATUS_UPDATED = 'bank_transfer_status_updated';

    public const SUBSCRIPTION_CREATED = 'subscription_created';

    public const SUBSCRIPTION_PAYMENT = 'subscription_payment';

    public const SUBSCRIPTION_COMPLETED = 'subscription_completed';

    public const SUBSCRIPTION_FAILURE = 'subscription_failure';

    public const SUBSCRIPTION_CANCELED = 'subscription_canceled';

    public const SUBSCRIPTION_SUSPENDED = 'subscription_suspended';

    private const _ALL_VALUES = [
        self::TOKEN_CREATED,
        self::TOKEN_UPDATED,
        self::TOKEN_THREE_D_S_UPDATED,
        self::TOKEN_CVV_AUTH_UPDATED,
        self::TOKEN_CVV_AUTH_CHECK_UPDATED,
        self::TOKEN_REPLACED,
        self::CHARGE_UPDATED,
        self::CHARGE_FINISHED,
        self::REFUND_FINISHED,
        self::CANCEL_FINISHED,
        self::CUSTOMS_DECLARATION_FINISHED,
        self::RECURRING_TOKEN_DELETED,
        self::BANK_TRANSFER_STATUS_UPDATED,
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
        throw new Exception("$value is invalid for WebhookTrigger.");
    }
}
