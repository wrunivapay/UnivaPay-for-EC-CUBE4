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
 * Checkout field collection settings.
 */
class MerchantWebhookCheckoutConfiguration implements \JsonSerializable
{
    /**
     * @var MerchantWebhookCheckoutToggle|null
     */
    private $ecEmail;

    /**
     * @var MerchantWebhookCheckoutToggle|null
     */
    private $ecProducts;

    /**
     * Returns Ec Email.
     * Checkout feature toggle.
     */
    public function getEcEmail(): ?MerchantWebhookCheckoutToggle
    {
        return $this->ecEmail;
    }

    /**
     * Sets Ec Email.
     * Checkout feature toggle.
     *
     * @maps ec_email
     */
    public function setEcEmail(?MerchantWebhookCheckoutToggle $ecEmail): void
    {
        $this->ecEmail = $ecEmail;
    }

    /**
     * Returns Ec Products.
     * Checkout feature toggle.
     */
    public function getEcProducts(): ?MerchantWebhookCheckoutToggle
    {
        return $this->ecProducts;
    }

    /**
     * Sets Ec Products.
     * Checkout feature toggle.
     *
     * @maps ec_products
     */
    public function setEcProducts(?MerchantWebhookCheckoutToggle $ecProducts): void
    {
        $this->ecProducts = $ecProducts;
    }

    /**
     * Converts the MerchantWebhookCheckoutConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the MerchantWebhookCheckoutConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookCheckoutConfiguration',
            [
                'ecEmail' => $this->ecEmail,
                'ecProducts' => $this->ecProducts,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['ec_email', 'ec_products'];

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
        if (isset($this->ecEmail)) {
            $json['ec_email']    = $this->ecEmail;
        }
        if (isset($this->ecProducts)) {
            $json['ec_products'] = $this->ecProducts;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
