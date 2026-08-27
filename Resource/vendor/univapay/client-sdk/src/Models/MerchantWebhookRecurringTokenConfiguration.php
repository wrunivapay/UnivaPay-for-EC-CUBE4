<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;

/**
 * Recurring token configuration inherited by the merchant.
 */
class MerchantWebhookRecurringTokenConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $recurringType = [];

    /**
     * @var array
     */
    private $chargeWaitPeriod = [];

    /**
     * @var MerchantWebhookRecurringCvvConfirmationConfig|null
     */
    private $cardChargeCvvConfirmation;

    /**
     * Returns Recurring Type.
     * Merchant recurring-token privilege.
     */
    public function getRecurringType(): ?string
    {
        if (count($this->recurringType) == 0) {
            return null;
        }
        return $this->recurringType['value'];
    }

    /**
     * Sets Recurring Type.
     * Merchant recurring-token privilege.
     *
     * @maps recurring_type
     */
    public function setRecurringType(?string $recurringType): void
    {
        $this->recurringType['value'] = $recurringType;
    }

    /**
     * Unsets Recurring Type.
     * Merchant recurring-token privilege.
     */
    public function unsetRecurringType(): void
    {
        $this->recurringType = [];
    }

    /**
     * Returns Charge Wait Period.
     * ISO-8601 duration to wait before first recurring charge.
     */
    public function getChargeWaitPeriod(): ?string
    {
        if (count($this->chargeWaitPeriod) == 0) {
            return null;
        }
        return $this->chargeWaitPeriod['value'];
    }

    /**
     * Sets Charge Wait Period.
     * ISO-8601 duration to wait before first recurring charge.
     *
     * @maps charge_wait_period
     */
    public function setChargeWaitPeriod(?string $chargeWaitPeriod): void
    {
        $this->chargeWaitPeriod['value'] = $chargeWaitPeriod;
    }

    /**
     * Unsets Charge Wait Period.
     * ISO-8601 duration to wait before first recurring charge.
     */
    public function unsetChargeWaitPeriod(): void
    {
        $this->chargeWaitPeriod = [];
    }

    /**
     * Returns Card Charge Cvv Confirmation.
     * CVV confirmation rules for recurring token charges.
     */
    public function getCardChargeCvvConfirmation(): ?MerchantWebhookRecurringCvvConfirmationConfig
    {
        return $this->cardChargeCvvConfirmation;
    }

    /**
     * Sets Card Charge Cvv Confirmation.
     * CVV confirmation rules for recurring token charges.
     *
     * @maps card_charge_cvv_confirmation
     */
    public function setCardChargeCvvConfirmation(
        ?MerchantWebhookRecurringCvvConfirmationConfig $cardChargeCvvConfirmation
    ): void {
        $this->cardChargeCvvConfirmation = $cardChargeCvvConfirmation;
    }

    /**
     * Converts the MerchantWebhookRecurringTokenConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookRecurringTokenConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookRecurringTokenConfiguration',
            [
                'recurringType' => $this->getRecurringType(),
                'chargeWaitPeriod' => $this->getChargeWaitPeriod(),
                'cardChargeCvvConfirmation' => $this->cardChargeCvvConfirmation,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['recurring_type', 'charge_wait_period', 'card_charge_cvv_confirmation'];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->recurringType)) {
            $json['recurring_type']               = $this->recurringType['value'];
        }
        if (!empty($this->chargeWaitPeriod)) {
            $json['charge_wait_period']           = $this->chargeWaitPeriod['value'];
        }
        if (isset($this->cardChargeCvvConfirmation)) {
            $json['card_charge_cvv_confirmation'] = $this->cardChargeCvvConfirmation;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
