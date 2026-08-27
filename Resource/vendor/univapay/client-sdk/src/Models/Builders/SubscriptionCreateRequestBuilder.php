<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCreateRequestThreeDs;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\SubscriptionCreateRequest;
use UnivaPay\Models\SubscriptionInstallmentPlan;
use UnivaPay\Models\SubscriptionPlanSettings;
use UnivaPay\Models\SubscriptionScheduleSettings;

/**
 * Builder for model SubscriptionCreateRequest
 *
 * @see SubscriptionCreateRequest
 */
class SubscriptionCreateRequestBuilder
{
    /**
     * @var SubscriptionCreateRequest
     */
    private $instance;

    private function __construct(SubscriptionCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Create Request Builder object.
     *
     * @param string $transactionTokenId
     * @param int $amount
     * @param string $currency
     */
    public static function init(string $transactionTokenId, int $amount, string $currency): self
    {
        return new self(new SubscriptionCreateRequest($transactionTokenId, $amount, $currency));
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
     * Sets schedule settings field.
     *
     * @param SubscriptionScheduleSettings|null $value
     */
    public function scheduleSettings(?SubscriptionScheduleSettings $value): self
    {
        $this->instance->setScheduleSettings($value);
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
     * Sets first charge authorization only field.
     *
     * @param bool|null $value
     */
    public function firstChargeAuthorizationOnly(?bool $value): self
    {
        $this->instance->setFirstChargeAuthorizationOnly($value);
        return $this;
    }

    /**
     * Sets first charge capture after field.
     *
     * @param string|null $value
     */
    public function firstChargeCaptureAfter(?string $value): self
    {
        $this->instance->setFirstChargeCaptureAfter($value);
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
     * Sets three ds field.
     *
     * @param ChargeCreateRequestThreeDs|null $value
     */
    public function threeDs(?ChargeCreateRequestThreeDs $value): self
    {
        $this->instance->setThreeDs($value);
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
     * Initializes a new Subscription Create Request object.
     */
    public function build(): SubscriptionCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
