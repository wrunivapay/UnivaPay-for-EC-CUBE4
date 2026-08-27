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
 * Request payload for simulating a subscription payment schedule without creating a live subscription.
 * Specify exactly one of 'period' or 'cyclical_period' to define the billing frequency.
 * 'installment_plan' and 'subscription_plan' are mutually exclusive — specify at most one to model a
 * limited-cycle schedule.
 */
class SubscriptionSimulationRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $paymentType;

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
     * @var SubscriptionScheduleSettings
     */
    private $scheduleSettings;

    /**
     * @var SubscriptionSimulationPlanSettings|null
     */
    private $installmentPlan;

    /**
     * @var SubscriptionSimulationPlanSettings|null
     */
    private $subscriptionPlan;

    /**
     * @var bool|null
     */
    private $onlyDirectCurrency;

    /**
     * @param int $amount
     * @param string $currency
     * @param string $paymentType
     * @param SubscriptionScheduleSettings $scheduleSettings
     */
    public function __construct(
        int $amount,
        string $currency,
        string $paymentType,
        SubscriptionScheduleSettings $scheduleSettings
    ) {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->paymentType = $paymentType;
        $this->scheduleSettings = $scheduleSettings;
    }

    /**
     * Returns Amount.
     * Amount to be charged in each cycle. Must be a positive integer.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount to be charged in each cycle. Must be a positive integer.
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
     * Returns Payment Type.
     * Transaction Token Payment Type schema.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Transaction Token Payment Type schema.
     *
     * @required
     * @maps payment_type
     * @factory \UnivaPay\Models\TransactionTokenPaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Initial Amount.
     * Optional different amount for the first charge. Must be zero or greater.
     */
    public function getInitialAmount(): ?int
    {
        return $this->initialAmount;
    }

    /**
     * Sets Initial Amount.
     * Optional different amount for the first charge. Must be zero or greater.
     *
     * @maps initial_amount
     */
    public function setInitialAmount(?int $initialAmount): void
    {
        $this->initialAmount = $initialAmount;
    }

    /**
     * Returns Period.
     * Billing frequency for the simulated schedule. Includes `bimonthly`, which is not offered on
     * `SubscriptionPeriod` for live subscription creation.
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * Billing frequency for the simulated schedule. Includes `bimonthly`, which is not offered on
     * `SubscriptionPeriod` for live subscription creation.
     *
     * @maps period
     * @factory \UnivaPay\Models\SubscriptionSimulationPeriod::checkValue
     */
    public function setPeriod(?string $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Cyclical Period.
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with 'period' —
     * specify exactly one of the two.
     */
    public function getCyclicalPeriod(): ?string
    {
        return $this->cyclicalPeriod;
    }

    /**
     * Sets Cyclical Period.
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with 'period' —
     * specify exactly one of the two.
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
    public function getScheduleSettings(): SubscriptionScheduleSettings
    {
        return $this->scheduleSettings;
    }

    /**
     * Sets Schedule Settings.
     * Schedule settings applied to a subscription.
     *
     * @required
     * @maps schedule_settings
     */
    public function setScheduleSettings(SubscriptionScheduleSettings $scheduleSettings): void
    {
        $this->scheduleSettings = $scheduleSettings;
    }

    /**
     * Returns Installment Plan.
     * Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side
     * subscription plan.
     */
    public function getInstallmentPlan(): ?SubscriptionSimulationPlanSettings
    {
        return $this->installmentPlan;
    }

    /**
     * Sets Installment Plan.
     * Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side
     * subscription plan.
     *
     * @maps installment_plan
     */
    public function setInstallmentPlan(?SubscriptionSimulationPlanSettings $installmentPlan): void
    {
        $this->installmentPlan = $installmentPlan;
    }

    /**
     * Returns Subscription Plan.
     * Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side
     * subscription plan.
     */
    public function getSubscriptionPlan(): ?SubscriptionSimulationPlanSettings
    {
        return $this->subscriptionPlan;
    }

    /**
     * Sets Subscription Plan.
     * Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side
     * subscription plan.
     *
     * @maps subscription_plan
     */
    public function setSubscriptionPlan(?SubscriptionSimulationPlanSettings $subscriptionPlan): void
    {
        $this->subscriptionPlan = $subscriptionPlan;
    }

    /**
     * Returns Only Direct Currency.
     * Whether only direct currency processing is allowed.
     */
    public function getOnlyDirectCurrency(): ?bool
    {
        return $this->onlyDirectCurrency;
    }

    /**
     * Sets Only Direct Currency.
     * Whether only direct currency processing is allowed.
     *
     * @maps only_direct_currency
     */
    public function setOnlyDirectCurrency(?bool $onlyDirectCurrency): void
    {
        $this->onlyDirectCurrency = $onlyDirectCurrency;
    }

    /**
     * Converts the SubscriptionSimulationRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionSimulationRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionSimulationRequest',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'paymentType' => $this->paymentType,
                'initialAmount' => $this->initialAmount,
                'period' => $this->period,
                'cyclicalPeriod' => $this->cyclicalPeriod,
                'scheduleSettings' => $this->scheduleSettings,
                'installmentPlan' => $this->installmentPlan,
                'subscriptionPlan' => $this->subscriptionPlan,
                'onlyDirectCurrency' => $this->onlyDirectCurrency,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'amount',
        'currency',
        'payment_type',
        'initial_amount',
        'period',
        'cyclical_period',
        'schedule_settings',
        'installment_plan',
        'subscription_plan',
        'only_direct_currency'
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
        $json['amount']                   = $this->amount;
        $json['currency']                 = $this->currency;
        $json['payment_type']             = TransactionTokenPaymentType::checkValue($this->paymentType);
        if (isset($this->initialAmount)) {
            $json['initial_amount']       = $this->initialAmount;
        }
        if (isset($this->period)) {
            $json['period']               = SubscriptionSimulationPeriod::checkValue($this->period);
        }
        if (isset($this->cyclicalPeriod)) {
            $json['cyclical_period']      = $this->cyclicalPeriod;
        }
        $json['schedule_settings']        = $this->scheduleSettings;
        if (isset($this->installmentPlan)) {
            $json['installment_plan']     = $this->installmentPlan;
        }
        if (isset($this->subscriptionPlan)) {
            $json['subscription_plan']    = $this->subscriptionPlan;
        }
        if (isset($this->onlyDirectCurrency)) {
            $json['only_direct_currency'] = $this->onlyDirectCurrency;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
