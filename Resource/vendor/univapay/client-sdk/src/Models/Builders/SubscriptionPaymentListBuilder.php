<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionPayment;
use UnivaPay\Models\SubscriptionPaymentList;

/**
 * Builder for model SubscriptionPaymentList
 *
 * @see SubscriptionPaymentList
 */
class SubscriptionPaymentListBuilder
{
    /**
     * @var SubscriptionPaymentList
     */
    private $instance;

    private function __construct(SubscriptionPaymentList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Payment List Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionPaymentList());
    }

    /**
     * Sets items field.
     *
     * @param SubscriptionPayment[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Sets has more field.
     *
     * @param bool|null $value
     */
    public function hasMore(?bool $value): self
    {
        $this->instance->setHasMore($value);
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
     * Initializes a new Subscription Payment List object.
     */
    public function build(): SubscriptionPaymentList
    {
        return CoreHelper::clone($this->instance);
    }
}
