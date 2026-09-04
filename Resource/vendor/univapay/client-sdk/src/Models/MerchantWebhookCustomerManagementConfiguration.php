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
 * Customer-management defaults.
 */
class MerchantWebhookCustomerManagementConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $defaultRoles = [];

    /**
     * @var array
     */
    private $defaultMode = [];

    /**
     * Returns Enabled.
     * Enables customer-management features.
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
     * Enables customer-management features.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables customer-management features.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Default Roles.
     * Roles applied to newly created customers.
     *
     * @return string[]|null
     */
    public function getDefaultRoles(): ?array
    {
        if (count($this->defaultRoles) == 0) {
            return null;
        }
        return $this->defaultRoles['value'];
    }

    /**
     * Sets Default Roles.
     * Roles applied to newly created customers.
     *
     * @maps default_roles
     *
     * @param string[]|null $defaultRoles
     */
    public function setDefaultRoles(?array $defaultRoles): void
    {
        $this->defaultRoles['value'] = $defaultRoles;
    }

    /**
     * Unsets Default Roles.
     * Roles applied to newly created customers.
     */
    public function unsetDefaultRoles(): void
    {
        $this->defaultRoles = [];
    }

    /**
     * Returns Default Mode.
     * Default processing mode assigned to new customer records.
     */
    public function getDefaultMode(): ?string
    {
        if (count($this->defaultMode) == 0) {
            return null;
        }
        return $this->defaultMode['value'];
    }

    /**
     * Sets Default Mode.
     * Default processing mode assigned to new customer records.
     *
     * @maps default_mode
     */
    public function setDefaultMode(?string $defaultMode): void
    {
        $this->defaultMode['value'] = $defaultMode;
    }

    /**
     * Unsets Default Mode.
     * Default processing mode assigned to new customer records.
     */
    public function unsetDefaultMode(): void
    {
        $this->defaultMode = [];
    }

    /**
     * Converts the MerchantWebhookCustomerManagementConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookCustomerManagementConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookCustomerManagementConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'defaultRoles' => $this->getDefaultRoles(),
                'defaultMode' => $this->getDefaultMode(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'default_roles', 'default_mode'];

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
            $json['enabled']       = $this->enabled['value'];
        }
        if (!empty($this->defaultRoles)) {
            $json['default_roles'] = $this->defaultRoles['value'];
        }
        if (!empty($this->defaultMode)) {
            $json['default_mode']  = $this->defaultMode['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
