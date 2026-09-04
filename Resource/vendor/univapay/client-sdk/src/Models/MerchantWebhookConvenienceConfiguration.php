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
 * Convenience-store payment settings.
 */
class MerchantWebhookConvenienceConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $expiration = [];

    /**
     * Returns Enabled.
     * Enables convenience-store payments.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables convenience-store payments.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables convenience-store payments.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Expiration.
     * ISO-8601 duration before convenience payment expiry.
     */
    public function getExpiration(): ?string
    {
        if (count($this->expiration) == 0) {
            return null;
        }
        return $this->expiration['value'];
    }

    /**
     * Sets Expiration.
     * ISO-8601 duration before convenience payment expiry.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration['value'] = $expiration;
    }

    /**
     * Unsets Expiration.
     * ISO-8601 duration before convenience payment expiry.
     */
    public function unsetExpiration(): void
    {
        $this->expiration = [];
    }

    /**
     * Converts the MerchantWebhookConvenienceConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookConvenienceConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookConvenienceConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'expiration' => $this->getExpiration(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'expiration'];

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
        if (!empty($this->enabled)) {
            $json['enabled']    = $this->enabled['value'];
        }
        if (!empty($this->expiration)) {
            $json['expiration'] = $this->expiration['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
