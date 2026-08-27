<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionTokenList;
use UnivaPay\Models\TransactionTokenListItem;

/**
 * Builder for model TransactionTokenList
 *
 * @see TransactionTokenList
 */
class TransactionTokenListBuilder
{
    /**
     * @var TransactionTokenList
     */
    private $instance;

    private function __construct(TransactionTokenList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token List Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionTokenList());
    }

    /**
     * Sets items field.
     *
     * @param TransactionTokenListItem[]|null $value
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
     * Initializes a new Transaction Token List object.
     */
    public function build(): TransactionTokenList
    {
        return CoreHelper::clone($this->instance);
    }
}
