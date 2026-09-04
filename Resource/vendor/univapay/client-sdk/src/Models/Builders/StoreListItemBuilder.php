<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\StoreListItem;

/**
 * Builder for model StoreListItem
 *
 * @see StoreListItem
 */
class StoreListItemBuilder
{
    /**
     * @var StoreListItem
     */
    private $instance;

    private function __construct(StoreListItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Store List Item Builder object.
     */
    public static function init(): self
    {
        return new self(new StoreListItem());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets merchant name field.
     *
     * @param string|null $value
     */
    public function merchantName(?string $value): self
    {
        $this->instance->setMerchantName($value);
        return $this;
    }

    /**
     * Sets created on field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
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
     * Initializes a new Store List Item object.
     */
    public function build(): StoreListItem
    {
        return CoreHelper::clone($this->instance);
    }
}
