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
 * Request payload for updating a subscription.
 */
class SubscriptionUpdateRequest implements \JsonSerializable
{
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
    private $period;

    /**
     * @var string|null
     */
    private $cyclicalPeriod;

    /**
     * @var int|null
     */
    private $initialAmount;

    /**
     * @var SubscriptionPlanSettings|null
     */
    private $subscriptionPlan;

    /**
     * @var SubscriptionInstallmentPlan|null
     */
    private $installmentPlan;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var SubscriptionUpdateScheduleSettings|null
     */
    private $scheduleSettings;

    /**
     * @var SubscriptionUpdateNextPayment|null
     */
    private $nextPayment;

    /**
     * Returns Transaction Token Id.
     * Transaction token ID used for the subscription.  Can be changed to update the payment method (e.g.,
     * when a card expires).  Allowed only when the status is `unconfirmed`, `unpaid`, `current`, or
     * `suspended`.
     */
    public function getTransactionTokenId(): ?string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token ID used for the subscription.  Can be changed to update the payment method (e.g.,
     * when a card expires).  Allowed only when the status is `unconfirmed`, `unpaid`, `current`, or
     * `suspended`.
     *
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(?string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Amount.
     * The recurring charge amount (applied to the cycle after the next one).  Not available for limited-
     * cycle subscriptions.  To change the immediate next payment amount, update `next_payment.amount`
     * instead.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The recurring charge amount (applied to the cycle after the next one).  Not available for limited-
     * cycle subscriptions.  To change the immediate next payment amount, update `next_payment.amount`
     * instead.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
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
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with `period`. Only
     * allowed before the subscription's first payment has been paid.
     */
    public function getCyclicalPeriod(): ?string
    {
        return $this->cyclicalPeriod;
    }

    /**
     * Sets Cyclical Period.
     * ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with `period`. Only
     * allowed before the subscription's first payment has been paid.
     *
     * @maps cyclical_period
     */
    public function setCyclicalPeriod(?string $cyclicalPeriod): void
    {
        $this->cyclicalPeriod = $cyclicalPeriod;
    }

    /**
     * Returns Initial Amount.
     * Different amount for the first charge. Only allowed while the subscription status is still editable
     * (before it has started) and requires the App Token Secret.
     */
    public function getInitialAmount(): ?int
    {
        return $this->initialAmount;
    }

    /**
     * Sets Initial Amount.
     * Different amount for the first charge. Only allowed while the subscription status is still editable
     * (before it has started) and requires the App Token Secret.
     *
     * @maps initial_amount
     */
    public function setInitialAmount(?int $initialAmount): void
    {
        $this->initialAmount = $initialAmount;
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
     * Returns Status.
     * Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended
     * subscription.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended
     * subscription.
     *
     * @maps status
     * @factory \UnivaPay\Models\SubscriptionUpdateStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Schedule Settings.
     * Schedule settings that can be updated on a subscription.
     */
    public function getScheduleSettings(): ?SubscriptionUpdateScheduleSettings
    {
        return $this->scheduleSettings;
    }

    /**
     * Sets Schedule Settings.
     * Schedule settings that can be updated on a subscription.
     *
     * @maps schedule_settings
     */
    public function setScheduleSettings(?SubscriptionUpdateScheduleSettings $scheduleSettings): void
    {
        $this->scheduleSettings = $scheduleSettings;
    }

    /**
     * Returns Next Payment.
     * Fields that can be updated on the next scheduled payment.
     */
    public function getNextPayment(): ?SubscriptionUpdateNextPayment
    {
        return $this->nextPayment;
    }

    /**
     * Sets Next Payment.
     * Fields that can be updated on the next scheduled payment.
     *
     * @maps next_payment
     */
    public function setNextPayment(?SubscriptionUpdateNextPayment $nextPayment): void
    {
        $this->nextPayment = $nextPayment;
    }

    /**
     * Converts the SubscriptionUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionUpdateRequest',
            [
                'transactionTokenId' => $this->transactionTokenId,
                'amount' => $this->amount,
                'period' => $this->period,
                'cyclicalPeriod' => $this->cyclicalPeriod,
                'initialAmount' => $this->initialAmount,
                'subscriptionPlan' => $this->subscriptionPlan,
                'installmentPlan' => $this->installmentPlan,
                'metadata' => $this->metadata,
                'status' => $this->status,
                'scheduleSettings' => $this->scheduleSettings,
                'nextPayment' => $this->nextPayment,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'transaction_token_id',
        'amount',
        'period',
        'cyclical_period',
        'initial_amount',
        'subscription_plan',
        'installment_plan',
        'metadata',
        'status',
        'schedule_settings',
        'next_payment'
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
        if (isset($this->transactionTokenId)) {
            $json['transaction_token_id'] = $this->transactionTokenId;
        }
        if (isset($this->amount)) {
            $json['amount']               = $this->amount;
        }
        if (isset($this->period)) {
            $json['period']               = SubscriptionPeriod::checkValue($this->period);
        }
        if (isset($this->cyclicalPeriod)) {
            $json['cyclical_period']      = $this->cyclicalPeriod;
        }
        if (isset($this->initialAmount)) {
            $json['initial_amount']       = $this->initialAmount;
        }
        if (isset($this->subscriptionPlan)) {
            $json['subscription_plan']    = $this->subscriptionPlan;
        }
        if (isset($this->installmentPlan)) {
            $json['installment_plan']     = $this->installmentPlan;
        }
        if (isset($this->metadata)) {
            $json['metadata']             = $this->metadata;
        }
        if (isset($this->status)) {
            $json['status']               = SubscriptionUpdateStatus::checkValue($this->status);
        }
        if (isset($this->scheduleSettings)) {
            $json['schedule_settings']    = $this->scheduleSettings;
        }
        if (isset($this->nextPayment)) {
            $json['next_payment']         = $this->nextPayment;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
