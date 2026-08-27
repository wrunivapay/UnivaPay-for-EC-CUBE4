<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionInstallmentPlanResponse;

/**
 * Builder for model SubscriptionInstallmentPlanResponse
 *
 * @see SubscriptionInstallmentPlanResponse
 */
class SubscriptionInstallmentPlanResponseBuilder
{
    /**
     * @var SubscriptionInstallmentPlanResponse
     */
    private $instance;

    private function __construct(SubscriptionInstallmentPlanResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Installment Plan Response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionInstallmentPlanResponse());
    }

    /**
     * Sets plan type field.
     *
     * @param string|null $value
     */
    public function planType(?string $value): self
    {
        $this->instance->setPlanType($value);
        return $this;
    }

    /**
     * Sets fixed cycles field.
     *
     * @param int|null $value
     */
    public function fixedCycles(?int $value): self
    {
        $this->instance->setFixedCycles($value);
        return $this;
    }

    /**
     * Unsets fixed cycles field.
     */
    public function unsetFixedCycles(): self
    {
        $this->instance->unsetFixedCycles();
        return $this;
    }

    /**
     * Sets fixed cycles amount field.
     *
     * @param int|null $value
     */
    public function fixedCyclesAmount(?int $value): self
    {
        $this->instance->setFixedCyclesAmount($value);
        return $this;
    }

    /**
     * Unsets fixed cycles amount field.
     */
    public function unsetFixedCyclesAmount(): self
    {
        $this->instance->unsetFixedCyclesAmount();
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
     * Initializes a new Subscription Installment Plan Response object.
     */
    public function build(): SubscriptionInstallmentPlanResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
