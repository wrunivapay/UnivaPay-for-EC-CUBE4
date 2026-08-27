<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay;

use Core\Utils\CoreHelper;
use Core\Utils\JsonHelper;

/**
 * API utility class.
 */
class ApiHelper
{
    /**
     * A map of all discriminator substitutions where keys contain substituted
     * discriminators in templates while values are actual discriminator values.
     *
     * @var array
     */
    private const DISCRIMINATOR_SUBSTITUTIONS = [
        'bankTransfer' => 'bank_transfer',
        'qrScan' => 'qr_scan',
        'qrMerchant' => 'qr_merchant',
        'paymentType' => 'payment_type',
        'card2' => 'card',
        'konbini2' => 'konbini',
        'online2' => 'online',
        'bankTransfer2' => 'bank_transfer',
        'paidy2' => 'paidy',
        'qrScan2' => 'qr_scan',
        'qrMerchant2' => 'qr_merchant',
        'paymentType2' => 'payment_type',
        'chargeUpdated' => 'charge_updated',
        'chargeFinished' => 'charge_finished',
        'tokenCreated' => 'token_created',
        'tokenUpdated' => 'token_updated',
        'tokenThreeDSUpdated' => 'token_three_d_s_updated',
        'tokenCvvAuthUpdated' => 'token_cvv_auth_updated',
        'tokenCvvAuthCheckUpdated' => 'token_cvv_auth_check_updated',
        'tokenReplaced' => 'token_replaced',
        'recurringTokenDeleted' => 'recurring_token_deleted',
        'event2' => 'event',
        'refundFinished' => 'refund_finished',
        'event3' => 'event',
        'cancelFinished' => 'cancel_finished',
        'event4' => 'event',
        'subscriptionCreated' => 'subscription_created',
        'subscriptionPayment' => 'subscription_payment',
        'subscriptionCompleted' => 'subscription_completed',
        'subscriptionFailure' => 'subscription_failure',
        'subscriptionCanceled' => 'subscription_canceled',
        'subscriptionSuspended' => 'subscription_suspended',
        'event5' => 'event',
        'bankTransferStatusUpdated' => 'bank_transfer_status_updated',
        'event6' => 'event',
        'customsDeclarationFinished' => 'customs_declaration_finished',
        'event7' => 'event'
    ];

    /**
     * @var JsonHelper
     */
    private static $jsonHelper;

    public static function getJsonHelper(): JsonHelper
    {
        if (self::$jsonHelper == null) {
            self::$jsonHelper = new JsonHelper(
                [],
                self::DISCRIMINATOR_SUBSTITUTIONS,
                'addAdditionalProperty',
                'UnivaPay\\Models'
            );
        }
        return self::$jsonHelper;
    }

    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        return CoreHelper::serialize($value);
    }

    /**
     * Deserialize a Json string.
     *
     * @param string $json A valid Json string
     *
     * @return mixed Decoded Json
     */
    public static function deserialize(string $json)
    {
        return CoreHelper::deserialize($json);
    }

    /**
     * Converts the properties to a human-readable string representation.
     *
     * Sample output:
     *
     * $prefix [$properties:key: $properties:value, $processedProperties]
     */
    public static function stringify(
        string $prefix,
        array $properties,
        string $processedProperties = ''
    ): string {
        return CoreHelper::stringify($prefix, $properties, $processedProperties);
    }
}
