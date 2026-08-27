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
use UnivaPay\Utils\DateTimeHelper;

/**
 * Token Response Card Data Cvv Authorize Check schema.
 */
class TokenResponseCardDataCvvAuthorizeCheck implements \JsonSerializable
{
    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $chargeId = [];

    /**
     * @var array
     */
    private $date = [];

    /**
     * Returns Status.
     * Current status of the resource.
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Current status of the resource.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Current status of the resource.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Charge Id.
     * Charge identifier.
     */
    public function getChargeId(): ?string
    {
        if (count($this->chargeId) == 0) {
            return null;
        }
        return $this->chargeId['value'];
    }

    /**
     * Sets Charge Id.
     * Charge identifier.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId['value'] = $chargeId;
    }

    /**
     * Unsets Charge Id.
     * Charge identifier.
     */
    public function unsetChargeId(): void
    {
        $this->chargeId = [];
    }

    /**
     * Returns Date.
     * Date value.
     */
    public function getDate(): ?\DateTime
    {
        if (count($this->date) == 0) {
            return null;
        }
        return $this->date['value'];
    }

    /**
     * Sets Date.
     * Date value.
     *
     * @maps date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDate(?\DateTime $date): void
    {
        $this->date['value'] = $date;
    }

    /**
     * Unsets Date.
     * Date value.
     */
    public function unsetDate(): void
    {
        $this->date = [];
    }

    /**
     * Converts the TokenResponseCardDataCvvAuthorizeCheck object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseCardDataCvvAuthorizeCheck object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseCardDataCvvAuthorizeCheck',
            [
                'status' => $this->getStatus(),
                'chargeId' => $this->getChargeId(),
                'date' => $this->getDate(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['status', 'charge_id', 'date'];

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
        if (!empty($this->status)) {
            $json['status']    = $this->status['value'];
        }
        if (!empty($this->chargeId)) {
            $json['charge_id'] = $this->chargeId['value'];
        }
        if (!empty($this->date)) {
            $json['date']      = DateTimeHelper::toRfc3339DateTime($this->date['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
