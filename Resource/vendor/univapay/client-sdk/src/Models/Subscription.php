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
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Utils\NumberHelper;

/**
 * The Subscription object represents a recurring payment schedule.
 */
class Subscription implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $storeId;

    /**
     * @var string|null
     */
    private $transactionTokenId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var float|null
     */
    private $amountFormatted;

    /**
     * @var array
     */
    private $initialAmount = [];

    /**
     * @var array
     */
    private $initialAmountFormatted = [];

    /**
     * @var array
     */
    private $subsequentCyclesStart = [];

    /**
     * @var SubscriptionScheduleSettings|null
     */
    private $scheduleSettings;

    /**
     * @var bool|null
     */
    private $onlyDirectCurrency;

    /**
     * @var array
     */
    private $firstChargeCaptureAfter = [];

    /**
     * @var bool|null
     */
    private $firstChargeAuthorizationOnly;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var SubscriptionThreeDs|null
     */
    private $threeDs;

    /**
     * @var string|null
     */
    private $period;

    /**
     * @var array
     */
    private $cyclicalPeriod = [];

    /**
     * @var SubscriptionNextPayment|null
     */
    private $nextPayment;

    /**
     * @var array
     */
    private $cyclesLeft = [];

    /**
     * @var SubscriptionPlanSettings|null
     */
    private $subscriptionPlan;

    /**
     * @var SubscriptionInstallmentPlanResponse|null
     */
    private $installmentPlan;

    /**
     * @var array
     */
    private $chargeId = [];

    /**
     * @var array
     */
    private $amountLeft = [];

    /**
     * @var array
     */
    private $amountLeftFormatted = [];

    /**
     * Returns Id.
     * Unique identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Store Id.
     * Store identifier.
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
     * Sets Store Id.
     * Store identifier.
     *
     * @maps store_id
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * Returns Transaction Token Id.
     * Transaction token identifier.
     */
    public function getTransactionTokenId(): ?string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token identifier.
     *
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(?string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Amount.
     * Amount in the smallest currency unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount in the smallest currency unit.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Amount Formatted.
     * Amount formatted for display.
     */
    public function getAmountFormatted(): ?float
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     * Amount formatted for display.
     *
     * @maps amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Initial Amount.
     * Initial amount in the smallest currency unit.
     */
    public function getInitialAmount(): ?int
    {
        if (count($this->initialAmount) == 0) {
            return null;
        }
        return $this->initialAmount['value'];
    }

    /**
     * Sets Initial Amount.
     * Initial amount in the smallest currency unit.
     *
     * @maps initial_amount
     */
    public function setInitialAmount(?int $initialAmount): void
    {
        $this->initialAmount['value'] = $initialAmount;
    }

    /**
     * Unsets Initial Amount.
     * Initial amount in the smallest currency unit.
     */
    public function unsetInitialAmount(): void
    {
        $this->initialAmount = [];
    }

    /**
     * Returns Initial Amount Formatted.
     * Initial amount formatted for display.
     */
    public function getInitialAmountFormatted(): ?float
    {
        if (count($this->initialAmountFormatted) == 0) {
            return null;
        }
        return $this->initialAmountFormatted['value'];
    }

    /**
     * Sets Initial Amount Formatted.
     * Initial amount formatted for display.
     *
     * @maps initial_amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setInitialAmountFormatted(?float $initialAmountFormatted): void
    {
        $this->initialAmountFormatted['value'] = $initialAmountFormatted;
    }

    /**
     * Unsets Initial Amount Formatted.
     * Initial amount formatted for display.
     */
    public function unsetInitialAmountFormatted(): void
    {
        $this->initialAmountFormatted = [];
    }

    /**
     * Returns Subsequent Cycles Start.
     * Timestamp when recurring cycles begin.
     */
    public function getSubsequentCyclesStart(): ?\DateTime
    {
        if (count($this->subsequentCyclesStart) == 0) {
            return null;
        }
        return $this->subsequentCyclesStart['value'];
    }

    /**
     * Sets Subsequent Cycles Start.
     * Timestamp when recurring cycles begin.
     *
     * @maps subsequent_cycles_start
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setSubsequentCyclesStart(?\DateTime $subsequentCyclesStart): void
    {
        $this->subsequentCyclesStart['value'] = $subsequentCyclesStart;
    }

    /**
     * Unsets Subsequent Cycles Start.
     * Timestamp when recurring cycles begin.
     */
    public function unsetSubsequentCyclesStart(): void
    {
        $this->subsequentCyclesStart = [];
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
     * Returns First Charge Capture After.
     * ISO-8601 Duration (e.g., P3D).
     */
    public function getFirstChargeCaptureAfter(): ?string
    {
        if (count($this->firstChargeCaptureAfter) == 0) {
            return null;
        }
        return $this->firstChargeCaptureAfter['value'];
    }

    /**
     * Sets First Charge Capture After.
     * ISO-8601 Duration (e.g., P3D).
     *
     * @maps first_charge_capture_after
     */
    public function setFirstChargeCaptureAfter(?string $firstChargeCaptureAfter): void
    {
        $this->firstChargeCaptureAfter['value'] = $firstChargeCaptureAfter;
    }

    /**
     * Unsets First Charge Capture After.
     * ISO-8601 Duration (e.g., P3D).
     */
    public function unsetFirstChargeCaptureAfter(): void
    {
        $this->firstChargeCaptureAfter = [];
    }

    /**
     * Returns First Charge Authorization Only.
     * Whether the first charge is authorization-only.
     */
    public function getFirstChargeAuthorizationOnly(): ?bool
    {
        return $this->firstChargeAuthorizationOnly;
    }

    /**
     * Sets First Charge Authorization Only.
     * Whether the first charge is authorization-only.
     *
     * @maps first_charge_authorization_only
     */
    public function setFirstChargeAuthorizationOnly(?bool $firstChargeAuthorizationOnly): void
    {
        $this->firstChargeAuthorizationOnly = $firstChargeAuthorizationOnly;
    }

    /**
     * Returns Status.
     * Subscription Status schema.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Subscription Status schema.
     *
     * @maps status
     * @factory \UnivaPay\Models\SubscriptionStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
     * Returns Mode.
     * Charge Mode schema.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Charge Mode schema.
     *
     * @maps mode
     * @factory \UnivaPay\Models\ChargeMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Created On.
     * Timestamp when the resource was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the resource was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Three Ds.
     * 3-D Secure configuration and redirect details applied to the subscription's payments.
     */
    public function getThreeDs(): ?SubscriptionThreeDs
    {
        return $this->threeDs;
    }

    /**
     * Sets Three Ds.
     * 3-D Secure configuration and redirect details applied to the subscription's payments.
     *
     * @maps three_ds
     */
    public function setThreeDs(?SubscriptionThreeDs $threeDs): void
    {
        $this->threeDs = $threeDs;
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
     * ISO-8601 Duration for a custom billing frequency (e.g., P3D, P1M), returned instead of `period` when
     * the subscription uses a custom cycle length rather than one of the fixed period presets. Mutually
     * exclusive with `period` — exactly one of the two is present.
     */
    public function getCyclicalPeriod(): ?string
    {
        if (count($this->cyclicalPeriod) == 0) {
            return null;
        }
        return $this->cyclicalPeriod['value'];
    }

    /**
     * Sets Cyclical Period.
     * ISO-8601 Duration for a custom billing frequency (e.g., P3D, P1M), returned instead of `period` when
     * the subscription uses a custom cycle length rather than one of the fixed period presets. Mutually
     * exclusive with `period` — exactly one of the two is present.
     *
     * @maps cyclical_period
     */
    public function setCyclicalPeriod(?string $cyclicalPeriod): void
    {
        $this->cyclicalPeriod['value'] = $cyclicalPeriod;
    }

    /**
     * Unsets Cyclical Period.
     * ISO-8601 Duration for a custom billing frequency (e.g., P3D, P1M), returned instead of `period` when
     * the subscription uses a custom cycle length rather than one of the fixed period presets. Mutually
     * exclusive with `period` — exactly one of the two is present.
     */
    public function unsetCyclicalPeriod(): void
    {
        $this->cyclicalPeriod = [];
    }

    /**
     * Returns Next Payment.
     * Next scheduled payment details for a subscription.
     */
    public function getNextPayment(): ?SubscriptionNextPayment
    {
        return $this->nextPayment;
    }

    /**
     * Sets Next Payment.
     * Next scheduled payment details for a subscription.
     *
     * @maps next_payment
     */
    public function setNextPayment(?SubscriptionNextPayment $nextPayment): void
    {
        $this->nextPayment = $nextPayment;
    }

    /**
     * Returns Cycles Left.
     * Number of remaining billing cycles before the subscription completes. Only present for cycle-limited
     * plans (`subscription_plan` or `installment_plan`); `null` for indefinite subscriptions.
     */
    public function getCyclesLeft(): ?int
    {
        if (count($this->cyclesLeft) == 0) {
            return null;
        }
        return $this->cyclesLeft['value'];
    }

    /**
     * Sets Cycles Left.
     * Number of remaining billing cycles before the subscription completes. Only present for cycle-limited
     * plans (`subscription_plan` or `installment_plan`); `null` for indefinite subscriptions.
     *
     * @maps cycles_left
     */
    public function setCyclesLeft(?int $cyclesLeft): void
    {
        $this->cyclesLeft['value'] = $cyclesLeft;
    }

    /**
     * Unsets Cycles Left.
     * Number of remaining billing cycles before the subscription completes. Only present for cycle-limited
     * plans (`subscription_plan` or `installment_plan`); `null` for indefinite subscriptions.
     */
    public function unsetCyclesLeft(): void
    {
        $this->cyclesLeft = [];
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
     * Returns Installment Plan.
     * Installment plan applied to the subscription, as returned by the API. Covers both card-network
     * installment plans (`revolving`, `fixed_cycles`) and legacy fixed-amount installment plans
     * (`fixed_cycle_amount`).
     */
    public function getInstallmentPlan(): ?SubscriptionInstallmentPlanResponse
    {
        return $this->installmentPlan;
    }

    /**
     * Sets Installment Plan.
     * Installment plan applied to the subscription, as returned by the API. Covers both card-network
     * installment plans (`revolving`, `fixed_cycles`) and legacy fixed-amount installment plans
     * (`fixed_cycle_amount`).
     *
     * @maps installment_plan
     */
    public function setInstallmentPlan(?SubscriptionInstallmentPlanResponse $installmentPlan): void
    {
        $this->installmentPlan = $installmentPlan;
    }

    /**
     * Returns Charge Id.
     * Identifier of the charge associated with the subscription's installment plan. Only present when
     * `installment_plan` is set.
     */
    public function getChargeId(): ?string
    {
        if (count($this->chargeId) == 0) {
            return null;
        }
        return $this->chargeId['value'];
    }

    /**
     * Sets Charge Id.
     * Identifier of the charge associated with the subscription's installment plan. Only present when
     * `installment_plan` is set.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId['value'] = $chargeId;
    }

    /**
     * Unsets Charge Id.
     * Identifier of the charge associated with the subscription's installment plan. Only present when
     * `installment_plan` is set.
     */
    public function unsetChargeId(): void
    {
        $this->chargeId = [];
    }

    /**
     * Returns Amount Left.
     * Remaining amount to be charged over the life of the plan, in the smallest currency unit. Only
     * present for cycle-limited plans.
     */
    public function getAmountLeft(): ?int
    {
        if (count($this->amountLeft) == 0) {
            return null;
        }
        return $this->amountLeft['value'];
    }

    /**
     * Sets Amount Left.
     * Remaining amount to be charged over the life of the plan, in the smallest currency unit. Only
     * present for cycle-limited plans.
     *
     * @maps amount_left
     */
    public function setAmountLeft(?int $amountLeft): void
    {
        $this->amountLeft['value'] = $amountLeft;
    }

    /**
     * Unsets Amount Left.
     * Remaining amount to be charged over the life of the plan, in the smallest currency unit. Only
     * present for cycle-limited plans.
     */
    public function unsetAmountLeft(): void
    {
        $this->amountLeft = [];
    }

    /**
     * Returns Amount Left Formatted.
     * `amount_left` formatted for display.
     */
    public function getAmountLeftFormatted(): ?float
    {
        if (count($this->amountLeftFormatted) == 0) {
            return null;
        }
        return $this->amountLeftFormatted['value'];
    }

    /**
     * Sets Amount Left Formatted.
     * `amount_left` formatted for display.
     *
     * @maps amount_left_formatted
     */
    public function setAmountLeftFormatted(?float $amountLeftFormatted): void
    {
        $this->amountLeftFormatted['value'] = $amountLeftFormatted;
    }

    /**
     * Unsets Amount Left Formatted.
     * `amount_left` formatted for display.
     */
    public function unsetAmountLeftFormatted(): void
    {
        $this->amountLeftFormatted = [];
    }

    /**
     * Converts the Subscription object to a human-readable string representation.
     *
     * @return string The string representation of the Subscription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Subscription',
            [
                'id' => $this->id,
                'storeId' => $this->storeId,
                'transactionTokenId' => $this->transactionTokenId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'amountFormatted' => $this->amountFormatted,
                'initialAmount' => $this->getInitialAmount(),
                'initialAmountFormatted' => $this->getInitialAmountFormatted(),
                'subsequentCyclesStart' => $this->getSubsequentCyclesStart(),
                'scheduleSettings' => $this->scheduleSettings,
                'onlyDirectCurrency' => $this->onlyDirectCurrency,
                'firstChargeCaptureAfter' => $this->getFirstChargeCaptureAfter(),
                'firstChargeAuthorizationOnly' => $this->firstChargeAuthorizationOnly,
                'status' => $this->status,
                'metadata' => $this->metadata,
                'mode' => $this->mode,
                'createdOn' => $this->createdOn,
                'threeDs' => $this->threeDs,
                'period' => $this->period,
                'cyclicalPeriod' => $this->getCyclicalPeriod(),
                'nextPayment' => $this->nextPayment,
                'cyclesLeft' => $this->getCyclesLeft(),
                'subscriptionPlan' => $this->subscriptionPlan,
                'installmentPlan' => $this->installmentPlan,
                'chargeId' => $this->getChargeId(),
                'amountLeft' => $this->getAmountLeft(),
                'amountLeftFormatted' => $this->getAmountLeftFormatted(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'store_id',
        'transaction_token_id',
        'amount',
        'currency',
        'amount_formatted',
        'initial_amount',
        'initial_amount_formatted',
        'subsequent_cycles_start',
        'schedule_settings',
        'only_direct_currency',
        'first_charge_capture_after',
        'first_charge_authorization_only',
        'status',
        'metadata',
        'mode',
        'created_on',
        'three_ds',
        'period',
        'cyclical_period',
        'next_payment',
        'cycles_left',
        'subscription_plan',
        'installment_plan',
        'charge_id',
        'amount_left',
        'amount_left_formatted'
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
        if (isset($this->id)) {
            $json['id']                              = $this->id;
        }
        if (isset($this->storeId)) {
            $json['store_id']                        = $this->storeId;
        }
        if (isset($this->transactionTokenId)) {
            $json['transaction_token_id']            = $this->transactionTokenId;
        }
        if (isset($this->amount)) {
            $json['amount']                          = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']                        = $this->currency;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted']                = $this->amountFormatted;
        }
        if (!empty($this->initialAmount)) {
            $json['initial_amount']                  = $this->initialAmount['value'];
        }
        if (!empty($this->initialAmountFormatted)) {
            $json['initial_amount_formatted']        = $this->initialAmountFormatted['value'];
        }
        if (!empty($this->subsequentCyclesStart)) {
            $json['subsequent_cycles_start']         =
                DateTimeHelper::toRfc3339DateTime(
                    $this->subsequentCyclesStart['value']
                );
        }
        if (isset($this->scheduleSettings)) {
            $json['schedule_settings']               = $this->scheduleSettings;
        }
        if (isset($this->onlyDirectCurrency)) {
            $json['only_direct_currency']            = $this->onlyDirectCurrency;
        }
        if (!empty($this->firstChargeCaptureAfter)) {
            $json['first_charge_capture_after']      = $this->firstChargeCaptureAfter['value'];
        }
        if (isset($this->firstChargeAuthorizationOnly)) {
            $json['first_charge_authorization_only'] = $this->firstChargeAuthorizationOnly;
        }
        if (isset($this->status)) {
            $json['status']                          = SubscriptionStatus::checkValue($this->status);
        }
        if (isset($this->metadata)) {
            $json['metadata']                        = $this->metadata;
        }
        if (isset($this->mode)) {
            $json['mode']                            = ChargeMode::checkValue($this->mode);
        }
        if (isset($this->createdOn)) {
            $json['created_on']                      = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->threeDs)) {
            $json['three_ds']                        = $this->threeDs;
        }
        if (isset($this->period)) {
            $json['period']                          = SubscriptionPeriod::checkValue($this->period);
        }
        if (!empty($this->cyclicalPeriod)) {
            $json['cyclical_period']                 = $this->cyclicalPeriod['value'];
        }
        if (isset($this->nextPayment)) {
            $json['next_payment']                    = $this->nextPayment;
        }
        if (!empty($this->cyclesLeft)) {
            $json['cycles_left']                     = $this->cyclesLeft['value'];
        }
        if (isset($this->subscriptionPlan)) {
            $json['subscription_plan']               = $this->subscriptionPlan;
        }
        if (isset($this->installmentPlan)) {
            $json['installment_plan']                = $this->installmentPlan;
        }
        if (!empty($this->chargeId)) {
            $json['charge_id']                       = $this->chargeId['value'];
        }
        if (!empty($this->amountLeft)) {
            $json['amount_left']                     = $this->amountLeft['value'];
        }
        if (!empty($this->amountLeftFormatted)) {
            $json['amount_left_formatted']           = $this->amountLeftFormatted['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
