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
 * Request payload for creating a subscription.
 */
class SubscriptionCreateRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionTokenId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var int|null
     */
    private $initialAmount;

    /**
     * @var string|null
     */
    private $period;

    /**
     * @var string|null
     */
    private $cyclicalPeriod;

    /**
     * @var SubscriptionScheduleSettings|null
     */
    private $scheduleSettings;

    /**
     * @var SubscriptionInstallmentPlan|null
     */
    private $installmentPlan;

    /**
     * @var SubscriptionPlanSettings|null
     */
    private $subscriptionPlan;

    /**
     * @var bool|null
     */
    private $firstChargeAuthorizationOnly = false;

    /**
     * @var string|null
     */
    private $firstChargeCaptureAfter;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var ChargeCreateRequestThreeDs|null
     */
    private $threeDs;

    /**
     * @param string $transactionTokenId
     * @param int $amount
     * @param string $currency
     */
    public function __construct(string $transactionTokenId, int $amount, string $currency)
    {
        $this->transactionTokenId = $transactionTokenId;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Returns Transaction Token Id.
     * Transaction token ID authorized for recurring payments.
     */
    public function getTransactionTokenId(): string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token ID authorized for recurring payments.
     *
     * @required
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Amount.
     * Amount to be charged in each cycle.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount to be charged in each cycle.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Initial Amount.
     * Optional different amount for the first charge.
     */
    public function getInitialAmount(): ?int
    {
        return $this->initialAmount;
    }

    /**
     * Sets Initial Amount.
     * Optional different amount for the first charge.
     *
     * @maps initial_amount
     */
    public function setInitialAmount(?int $initialAmount): void
    {
        $this->initialAmount = $initialAmount;
    }

    /**
     * Returns Period.
     * Subscription Period schema.
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * Subscription Period schema.
     *
     * @maps period
     * @factory \UnivaPay\Models\SubscriptionPeriod::checkValue
     */
    public function setPeriod(?string $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Cyclical Period.
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M).  Cannot be used if 'period' is specified.
     */
    public function getCyclicalPeriod(): ?string
    {
        return $this->cyclicalPeriod;
    }

    /**
     * Sets Cyclical Period.
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M).  Cannot be used if 'period' is specified.
     *
     * @maps cyclical_period
     */
    public function setCyclicalPeriod(?string $cyclicalPeriod): void
    {
        $this->cyclicalPeriod = $cyclicalPeriod;
    }

    /**
     * Returns Schedule Settings.
     * Schedule settings applied to a subscription.
     */
    public function getScheduleSettings(): ?SubscriptionScheduleSettings
    {
        return $this->scheduleSettings;
    }

    /**
     * Sets Schedule Settings.
     * Schedule settings applied to a subscription.
     *
     * @maps schedule_settings
     */
    public function setScheduleSettings(?SubscriptionScheduleSettings $scheduleSettings): void
    {
        $this->scheduleSettings = $scheduleSettings;
    }

    /**
     * Returns Installment Plan.
     * Configuration for credit card company side installments.
     */
    public function getInstallmentPlan(): ?SubscriptionInstallmentPlan
    {
        return $this->installmentPlan;
    }

    /**
     * Sets Installment Plan.
     * Configuration for credit card company side installments.
     *
     * @maps installment_plan
     */
    public function setInstallmentPlan(?SubscriptionInstallmentPlan $installmentPlan): void
    {
        $this->installmentPlan = $installmentPlan;
    }

    /**
     * Returns Subscription Plan.
     * Configuration for limited-cycle subscriptions (Univapay side).
     */
    public function getSubscriptionPlan(): ?SubscriptionPlanSettings
    {
        return $this->subscriptionPlan;
    }

    /**
     * Sets Subscription Plan.
     * Configuration for limited-cycle subscriptions (Univapay side).
     *
     * @maps subscription_plan
     */
    public function setSubscriptionPlan(?SubscriptionPlanSettings $subscriptionPlan): void
    {
        $this->subscriptionPlan = $subscriptionPlan;
    }

    /**
     * Returns First Charge Authorization Only.
     * If true, the first charge will only be an authorization (Hold).
     */
    public function getFirstChargeAuthorizationOnly(): ?bool
    {
        return $this->firstChargeAuthorizationOnly;
    }

    /**
     * Sets First Charge Authorization Only.
     * If true, the first charge will only be an authorization (Hold).
     *
     * @maps first_charge_authorization_only
     */
    public function setFirstChargeAuthorizationOnly(?bool $firstChargeAuthorizationOnly): void
    {
        $this->firstChargeAuthorizationOnly = $firstChargeAuthorizationOnly;
    }

    /**
     * Returns First Charge Capture After.
     * ISO-8601 Duration for auto-capture if authorization only is true.  Allowed days: P1D to P6D.
     */
    public function getFirstChargeCaptureAfter(): ?string
    {
        return $this->firstChargeCaptureAfter;
    }

    /**
     * Sets First Charge Capture After.
     * ISO-8601 Duration for auto-capture if authorization only is true.  Allowed days: P1D to P6D.
     *
     * @maps first_charge_capture_after
     */
    public function setFirstChargeCaptureAfter(?string $firstChargeCaptureAfter): void
    {
        $this->firstChargeCaptureAfter = $firstChargeCaptureAfter;
    }

    /**
     * Returns Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getMetadata(): ?GenericMetadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?GenericMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Three Ds.
     * Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to
     * have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through
     * `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that
     * case `mode` is set to `provided` automatically and must not be sent.
     */
    public function getThreeDs(): ?ChargeCreateRequestThreeDs
    {
        return $this->threeDs;
    }

    /**
     * Sets Three Ds.
     * Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to
     * have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through
     * `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that
     * case `mode` is set to `provided` automatically and must not be sent.
     *
     * @maps three_ds
     */
    public function setThreeDs(?ChargeCreateRequestThreeDs $threeDs): void
    {
        $this->threeDs = $threeDs;
    }

    /**
     * Converts the SubscriptionCreateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionCreateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionCreateRequest',
            [
                'transactionTokenId' => $this->transactionTokenId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'initialAmount' => $this->initialAmount,
                'period' => $this->period,
                'cyclicalPeriod' => $this->cyclicalPeriod,
                'scheduleSettings' => $this->scheduleSettings,
                'installmentPlan' => $this->installmentPlan,
                'subscriptionPlan' => $this->subscriptionPlan,
                'firstChargeAuthorizationOnly' => $this->firstChargeAuthorizationOnly,
                'firstChargeCaptureAfter' => $this->firstChargeCaptureAfter,
                'metadata' => $this->metadata,
                'threeDs' => $this->threeDs,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'transaction_token_id',
        'amount',
        'currency',
        'initial_amount',
        'period',
        'cyclical_period',
        'schedule_settings',
        'installment_plan',
        'subscription_plan',
        'first_charge_authorization_only',
        'first_charge_capture_after',
        'metadata',
        'three_ds'
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
        $json['transaction_token_id']                = $this->transactionTokenId;
        $json['amount']                              = $this->amount;
        $json['currency']                            = $this->currency;
        if (isset($this->initialAmount)) {
            $json['initial_amount']                  = $this->initialAmount;
        }
        if (isset($this->period)) {
            $json['period']                          = SubscriptionPeriod::checkValue($this->period);
        }
        if (isset($this->cyclicalPeriod)) {
            $json['cyclical_period']                 = $this->cyclicalPeriod;
        }
        if (isset($this->scheduleSettings)) {
            $json['schedule_settings']               = $this->scheduleSettings;
        }
        if (isset($this->installmentPlan)) {
            $json['installment_plan']                = $this->installmentPlan;
        }
        if (isset($this->subscriptionPlan)) {
            $json['subscription_plan']               = $this->subscriptionPlan;
        }
        if (isset($this->firstChargeAuthorizationOnly)) {
            $json['first_charge_authorization_only'] = $this->firstChargeAuthorizationOnly;
        }
        if (isset($this->firstChargeCaptureAfter)) {
            $json['first_charge_capture_after']      = $this->firstChargeCaptureAfter;
        }
        if (isset($this->metadata)) {
            $json['metadata']                        = $this->metadata;
        }
        if (isset($this->threeDs)) {
            $json['three_ds']                        = $this->threeDs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
