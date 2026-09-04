<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\SubscriptionInstallmentPlan;
use UnivaPay\Models\SubscriptionPlanSettings;
use UnivaPay\Models\SubscriptionUpdateNextPayment;
use UnivaPay\Models\SubscriptionUpdateRequest;
use UnivaPay\Models\SubscriptionUpdateScheduleSettings;

/**
 * Builder for model SubscriptionUpdateRequest
 *
 * @see SubscriptionUpdateRequest
 */
class SubscriptionUpdateRequestBuilder
{
    /**
     * @var SubscriptionUpdateRequest
     */
    private $instance;

    private function __construct(SubscriptionUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Update Request Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionUpdateRequest());
    }

    /**
     * Sets transaction token id field.
     *
     * @param string|null $value
     */
    public function transactionTokenId(?string $value): self
    {
        $this->instance->setTransactionTokenId($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets period field.
     *
     * @param string|null $value
     */
    public function period(?string $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Sets cyclical period field.
     *
     * @param string|null $value
     */
    public function cyclicalPeriod(?string $value): self
    {
        $this->instance->setCyclicalPeriod($value);
        return $this;
    }

    /**
     * Sets initial amount field.
     *
     * @param int|null $value
     */
    public function initialAmount(?int $value): self
    {
        $this->instance->setInitialAmount($value);
        return $this;
    }

    /**
     * Sets subscription plan field.
     *
     * @param SubscriptionPlanSettings|null $value
     */
    public function subscriptionPlan(?SubscriptionPlanSettings $value): self
    {
        $this->instance->setSubscriptionPlan($value);
        return $this;
    }

    /**
     * Sets installment plan field.
     *
     * @param SubscriptionInstallmentPlan|null $value
     */
    public function installmentPlan(?SubscriptionInstallmentPlan $value): self
    {
        $this->instance->setInstallmentPlan($value);
        return $this;
    }

    /**
     * Sets metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function metadata(?GenericMetadata $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets schedule settings field.
     *
     * @param SubscriptionUpdateScheduleSettings|null $value
     */
    public function scheduleSettings(?SubscriptionUpdateScheduleSettings $value): self
    {
        $this->instance->setScheduleSettings($value);
        return $this;
    }

    /**
     * Sets next payment field.
     *
     * @param SubscriptionUpdateNextPayment|null $value
     */
    public function nextPayment(?SubscriptionUpdateNextPayment $value): self
    {
        $this->instance->setNextPayment($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Subscription Update Request object.
     */
    public function build(): SubscriptionUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
