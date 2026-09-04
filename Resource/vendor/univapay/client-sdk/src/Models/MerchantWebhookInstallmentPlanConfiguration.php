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
 * Installment plan configuration.
 */
class MerchantWebhookInstallmentPlanConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var CardProcessorInstallmentConfig|null
     */
    private $cardProcessor;

    /**
     * @var array
     */
    private $supportedPaymentTypes = [];

    /**
     * @var MerchantWebhookMoneyAmount|null
     */
    private $minChargeAmount;

    /**
     * @var array
     */
    private $maxPayoutPeriod = [];

    /**
     * @var array
     */
    private $onlyWithProcessor = [];

    /**
     * Returns Enabled.
     * Enables installment plan features for eligible payments.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables installment plan features for eligible payments.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables installment plan features for eligible payments.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Card Processor.
     * Card-processor capabilities available for installment payments.
     */
    public function getCardProcessor(): ?CardProcessorInstallmentConfig
    {
        return $this->cardProcessor;
    }

    /**
     * Sets Card Processor.
     * Card-processor capabilities available for installment payments.
     *
     * @maps card_processor
     */
    public function setCardProcessor(?CardProcessorInstallmentConfig $cardProcessor): void
    {
        $this->cardProcessor = $cardProcessor;
    }

    /**
     * Returns Supported Payment Types.
     * Payment types that can use installment plans.
     *
     * @return string[]|null
     */
    public function getSupportedPaymentTypes(): ?array
    {
        if (count($this->supportedPaymentTypes) == 0) {
            return null;
        }
        return $this->supportedPaymentTypes['value'];
    }

    /**
     * Sets Supported Payment Types.
     * Payment types that can use installment plans.
     *
     * @maps supported_payment_types
     *
     * @param string[]|null $supportedPaymentTypes
     */
    public function setSupportedPaymentTypes(?array $supportedPaymentTypes): void
    {
        $this->supportedPaymentTypes['value'] = $supportedPaymentTypes;
    }

    /**
     * Unsets Supported Payment Types.
     * Payment types that can use installment plans.
     */
    public function unsetSupportedPaymentTypes(): void
    {
        $this->supportedPaymentTypes = [];
    }

    /**
     * Returns Min Charge Amount.
     * Monetary amount object serialized by backend config models.
     */
    public function getMinChargeAmount(): ?MerchantWebhookMoneyAmount
    {
        return $this->minChargeAmount;
    }

    /**
     * Sets Min Charge Amount.
     * Monetary amount object serialized by backend config models.
     *
     * @maps min_charge_amount
     */
    public function setMinChargeAmount(?MerchantWebhookMoneyAmount $minChargeAmount): void
    {
        $this->minChargeAmount = $minChargeAmount;
    }

    /**
     * Returns Max Payout Period.
     * Maximum payout delay allowed for installment settlements.
     */
    public function getMaxPayoutPeriod(): ?string
    {
        if (count($this->maxPayoutPeriod) == 0) {
            return null;
        }
        return $this->maxPayoutPeriod['value'];
    }

    /**
     * Sets Max Payout Period.
     * Maximum payout delay allowed for installment settlements.
     *
     * @maps max_payout_period
     */
    public function setMaxPayoutPeriod(?string $maxPayoutPeriod): void
    {
        $this->maxPayoutPeriod['value'] = $maxPayoutPeriod;
    }

    /**
     * Unsets Max Payout Period.
     * Maximum payout delay allowed for installment settlements.
     */
    public function unsetMaxPayoutPeriod(): void
    {
        $this->maxPayoutPeriod = [];
    }

    /**
     * Returns Only With Processor.
     * Restricts installment use to processor-backed flows.
     */
    public function getOnlyWithProcessor(): ?bool
    {
        if (count($this->onlyWithProcessor) == 0) {
            return null;
        }
        return $this->onlyWithProcessor['value'];
    }

    /**
     * Sets Only With Processor.
     * Restricts installment use to processor-backed flows.
     *
     * @maps only_with_processor
     */
    public function setOnlyWithProcessor(?bool $onlyWithProcessor): void
    {
        $this->onlyWithProcessor['value'] = $onlyWithProcessor;
    }

    /**
     * Unsets Only With Processor.
     * Restricts installment use to processor-backed flows.
     */
    public function unsetOnlyWithProcessor(): void
    {
        $this->onlyWithProcessor = [];
    }

    /**
     * Converts the MerchantWebhookInstallmentPlanConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookInstallmentPlanConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookInstallmentPlanConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'cardProcessor' => $this->cardProcessor,
                'supportedPaymentTypes' => $this->getSupportedPaymentTypes(),
                'minChargeAmount' => $this->minChargeAmount,
                'maxPayoutPeriod' => $this->getMaxPayoutPeriod(),
                'onlyWithProcessor' => $this->getOnlyWithProcessor(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'card_processor',
        'supported_payment_types',
        'min_charge_amount',
        'max_payout_period',
        'only_with_processor'
    ];

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
        if (!empty($this->enabled)) {
            $json['enabled']                 = $this->enabled['value'];
        }
        if (isset($this->cardProcessor)) {
            $json['card_processor']          = $this->cardProcessor;
        }
        if (!empty($this->supportedPaymentTypes)) {
            $json['supported_payment_types'] = $this->supportedPaymentTypes['value'];
        }
        if (isset($this->minChargeAmount)) {
            $json['min_charge_amount']       = $this->minChargeAmount;
        }
        if (!empty($this->maxPayoutPeriod)) {
            $json['max_payout_period']       = $this->maxPayoutPeriod['value'];
        }
        if (!empty($this->onlyWithProcessor)) {
            $json['only_with_processor']     = $this->onlyWithProcessor['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
