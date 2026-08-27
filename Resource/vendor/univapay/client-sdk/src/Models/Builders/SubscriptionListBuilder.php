<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionList;
use UnivaPay\Models\SubscriptionListItem;

/**
 * Builder for model SubscriptionList
 *
 * @see SubscriptionList
 */
class SubscriptionListBuilder
{
    /**
     * @var SubscriptionList
     */
    private $instance;

    private function __construct(SubscriptionList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription List Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionList());
    }

    /**
     * Sets items field.
     *
     * @param SubscriptionListItem[]|null $value
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
     * Sets total hits field.
     *
     * @param int|null $value
     */
    public function totalHits(?int $value): self
    {
        $this->instance->setTotalHits($value);
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
     * Initializes a new Subscription List object.
     */
    public function build(): SubscriptionList
    {
        return CoreHelper::clone($this->instance);
    }
}
