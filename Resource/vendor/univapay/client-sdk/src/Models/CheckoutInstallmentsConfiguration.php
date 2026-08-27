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
 * Installment plan configuration applied to checkout.
 */
class CheckoutInstallmentsConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var CheckoutInstallmentCardProcessor|null
     */
    private $cardProcessor;

    /**
     * @var string[]|null
     */
    private $supportedPaymentTypes;

    /**
     * @var array
     */
    private $minChargeAmount = [];

    /**
     * @var array
     */
    private $maxPayoutPeriod = [];

    /**
     * @var bool|null
     */
    private $onlyWithProcessor;

    /**
     * Returns Enabled.
     * Whether installment plans are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether installment plans are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Card Processor.
     * Card-processor capabilities available for installment payments.
     */
    public function getCardProcessor(): ?CheckoutInstallmentCardProcessor
    {
        return $this->cardProcessor;
    }

    /**
     * Sets Card Processor.
     * Card-processor capabilities available for installment payments.
     *
     * @maps card_processor
     */
    public function setCardProcessor(?CheckoutInstallmentCardProcessor $cardProcessor): void
    {
        $this->cardProcessor = $cardProcessor;
    }

    /**
     * Returns Supported Payment Types.
     * Payment types eligible for installment plans.
     *
     * @return string[]|null
     */
    public function getSupportedPaymentTypes(): ?array
    {
        return $this->supportedPaymentTypes;
    }

    /**
     * Sets Supported Payment Types.
     * Payment types eligible for installment plans.
     *
     * @maps supported_payment_types
     * @factory \UnivaPay\Models\CheckoutPaymentType::checkValue
     *
     * @param string[]|null $supportedPaymentTypes
     */
    public function setSupportedPaymentTypes(?array $supportedPaymentTypes): void
    {
        $this->supportedPaymentTypes = $supportedPaymentTypes;
    }

    /**
     * Returns Min Charge Amount.
     * Minimum charge amount eligible for installment plans. `null` when unrestricted.
     */
    public function getMinChargeAmount(): ?CheckoutMoneyAmount
    {
        if (count($this->minChargeAmount) == 0) {
            return null;
        }
        return $this->minChargeAmount['value'];
    }

    /**
     * Sets Min Charge Amount.
     * Minimum charge amount eligible for installment plans. `null` when unrestricted.
     *
     * @maps min_charge_amount
     */
    public function setMinChargeAmount(?CheckoutMoneyAmount $minChargeAmount): void
    {
        $this->minChargeAmount['value'] = $minChargeAmount;
    }

    /**
     * Unsets Min Charge Amount.
     * Minimum charge amount eligible for installment plans. `null` when unrestricted.
     */
    public function unsetMinChargeAmount(): void
    {
        $this->minChargeAmount = [];
    }

    /**
     * Returns Max Payout Period.
     * ISO-8601 period bounding the maximum payout delay for installment settlements. `null` when
     * unrestricted.
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
     * ISO-8601 period bounding the maximum payout delay for installment settlements. `null` when
     * unrestricted.
     *
     * @maps max_payout_period
     */
    public function setMaxPayoutPeriod(?string $maxPayoutPeriod): void
    {
        $this->maxPayoutPeriod['value'] = $maxPayoutPeriod;
    }

    /**
     * Unsets Max Payout Period.
     * ISO-8601 period bounding the maximum payout delay for installment settlements. `null` when
     * unrestricted.
     */
    public function unsetMaxPayoutPeriod(): void
    {
        $this->maxPayoutPeriod = [];
    }

    /**
     * Returns Only With Processor.
     * Whether installment plans are restricted to processor-backed flows. Always `true` — retained for
     * backwards compatibility.
     */
    public function getOnlyWithProcessor(): ?bool
    {
        return $this->onlyWithProcessor;
    }

    /**
     * Sets Only With Processor.
     * Whether installment plans are restricted to processor-backed flows. Always `true` — retained for
     * backwards compatibility.
     *
     * @maps only_with_processor
     */
    public function setOnlyWithProcessor(?bool $onlyWithProcessor): void
    {
        $this->onlyWithProcessor = $onlyWithProcessor;
    }

    /**
     * Converts the CheckoutInstallmentsConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutInstallmentsConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutInstallmentsConfiguration',
            [
                'enabled' => $this->enabled,
                'cardProcessor' => $this->cardProcessor,
                'supportedPaymentTypes' => $this->supportedPaymentTypes,
                'minChargeAmount' => $this->getMinChargeAmount(),
                'maxPayoutPeriod' => $this->getMaxPayoutPeriod(),
                'onlyWithProcessor' => $this->onlyWithProcessor,
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
        if (isset($this->enabled)) {
            $json['enabled']                 = $this->enabled;
        }
        if (isset($this->cardProcessor)) {
            $json['card_processor']          = $this->cardProcessor;
        }
        if (isset($this->supportedPaymentTypes)) {
            $json['supported_payment_types'] = CheckoutPaymentType::checkValue($this->supportedPaymentTypes);
        }
        if (!empty($this->minChargeAmount)) {
            $json['min_charge_amount']       = $this->minChargeAmount['value'];
        }
        if (!empty($this->maxPayoutPeriod)) {
            $json['max_payout_period']       = $this->maxPayoutPeriod['value'];
        }
        if (isset($this->onlyWithProcessor)) {
            $json['only_with_processor']     = $this->onlyWithProcessor;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
