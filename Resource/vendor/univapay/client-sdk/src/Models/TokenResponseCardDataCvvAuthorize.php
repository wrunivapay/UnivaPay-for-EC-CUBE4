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
 * Token Response Card Data Cvv Authorize schema.
 */
class TokenResponseCardDataCvvAuthorize implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

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
    private $credentialsId = [];

    /**
     * @var array
     */
    private $currency = [];

    /**
     * Returns Enabled.
     * Enabled value.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Enabled value.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

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
     * Returns Credentials Id.
     * Credentials identifier.
     */
    public function getCredentialsId(): ?string
    {
        if (count($this->credentialsId) == 0) {
            return null;
        }
        return $this->credentialsId['value'];
    }

    /**
     * Sets Credentials Id.
     * Credentials identifier.
     *
     * @maps credentials_id
     */
    public function setCredentialsId(?string $credentialsId): void
    {
        $this->credentialsId['value'] = $credentialsId;
    }

    /**
     * Unsets Credentials Id.
     * Credentials identifier.
     */
    public function unsetCredentialsId(): void
    {
        $this->credentialsId = [];
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): ?string
    {
        if (count($this->currency) == 0) {
            return null;
        }
        return $this->currency['value'];
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency['value'] = $currency;
    }

    /**
     * Unsets Currency.
     * ISO-4217 currency code.
     */
    public function unsetCurrency(): void
    {
        $this->currency = [];
    }

    /**
     * Converts the TokenResponseCardDataCvvAuthorize object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseCardDataCvvAuthorize object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseCardDataCvvAuthorize',
            [
                'enabled' => $this->enabled,
                'status' => $this->getStatus(),
                'chargeId' => $this->getChargeId(),
                'credentialsId' => $this->getCredentialsId(),
                'currency' => $this->getCurrency(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'status', 'charge_id', 'credentials_id', 'currency'];

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
        if (isset($this->enabled)) {
            $json['enabled']        = $this->enabled;
        }
        if (!empty($this->status)) {
            $json['status']         = $this->status['value'];
        }
        if (!empty($this->chargeId)) {
            $json['charge_id']      = $this->chargeId['value'];
        }
        if (!empty($this->credentialsId)) {
            $json['credentials_id'] = $this->credentialsId['value'];
        }
        if (!empty($this->currency)) {
            $json['currency']       = $this->currency['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
