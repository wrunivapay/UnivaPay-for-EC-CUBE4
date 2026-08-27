<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionScheduleSettings;
use UnivaPay\Models\SubscriptionSimulationPlanSettings;
use UnivaPay\Models\SubscriptionSimulationRequest;

/**
 * Builder for model SubscriptionSimulationRequest
 *
 * @see SubscriptionSimulationRequest
 */
class SubscriptionSimulationRequestBuilder
{
    /**
     * @var SubscriptionSimulationRequest
     */
    private $instance;

    private function __construct(SubscriptionSimulationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Simulation Request Builder object.
     *
     * @param int $amount
     * @param string $currency
     * @param string $paymentType
     * @param SubscriptionScheduleSettings $scheduleSettings
     */
    public static function init(
        int $amount,
        string $currency,
        string $paymentType,
        SubscriptionScheduleSettings $scheduleSettings
    ): self {
        return new self(new SubscriptionSimulationRequest($amount, $currency, $paymentType, $scheduleSettings));
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
     * Sets installment plan field.
     *
     * @param SubscriptionSimulationPlanSettings|null $value
     */
    public function installmentPlan(?SubscriptionSimulationPlanSettings $value): self
    {
        $this->instance->setInstallmentPlan($value);
        return $this;
    }

    /**
     * Sets subscription plan field.
     *
     * @param SubscriptionSimulationPlanSettings|null $value
     */
    public function subscriptionPlan(?SubscriptionSimulationPlanSettings $value): self
    {
        $this->instance->setSubscriptionPlan($value);
        return $this;
    }

    /**
     * Sets only direct currency field.
     *
     * @param bool|null $value
     */
    public function onlyDirectCurrency(?bool $value): self
    {
        $this->instance->setOnlyDirectCurrency($value);
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
     * Initializes a new Subscription Simulation Request object.
     */
    public function build(): SubscriptionSimulationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
