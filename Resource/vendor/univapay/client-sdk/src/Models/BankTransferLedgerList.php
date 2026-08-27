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
 * Paginated list of bank transfer ledger entries.
 */
class BankTransferLedgerList implements \JsonSerializable
{
    /**
     * @var BankTransferLedger[]|null
     */
    private $items;

    /**
     * @var bool|null
     */
    private $hasMore;

    /**
     * @var int|null
     */
    private $totalHits;

    /**
     * Returns Items.
     * List of resources.
     *
     * @return BankTransferLedger[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     * List of resources.
     *
     * @maps items
     *
     * @param BankTransferLedger[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Has More.
     * Whether more results are available.
     */
    public function getHasMore(): ?bool
    {
        return $this->hasMore;
    }

    /**
     * Sets Has More.
     * Whether more results are available.
     *
     * @maps has_more
     */
    public function setHasMore(?bool $hasMore): void
    {
        $this->hasMore = $hasMore;
    }

    /**
     * Returns Total Hits.
     * Total number of matching resources.
     */
    public function getTotalHits(): ?int
    {
        return $this->totalHits;
    }

    /**
     * Sets Total Hits.
     * Total number of matching resources.
     *
     * @maps total_hits
     */
    public function setTotalHits(?int $totalHits): void
    {
        $this->totalHits = $totalHits;
    }

    /**
     * Converts the BankTransferLedgerList object to a human-readable string representation.
     *
     * @return string The string representation of the BankTransferLedgerList object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankTransferLedgerList',
            [
                'items' => $this->items,
                'hasMore' => $this->hasMore,
                'totalHits' => $this->totalHits,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['items', 'has_more', 'total_hits'];

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
        if (isset($this->items)) {
            $json['items']      = $this->items;
        }
        if (isset($this->hasMore)) {
            $json['has_more']   = $this->hasMore;
        }
        if (isset($this->totalHits)) {
            $json['total_hits'] = $this->totalHits;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
