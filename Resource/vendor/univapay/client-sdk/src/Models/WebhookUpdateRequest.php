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
 * Request body for updating a webhook. All fields are optional. Omitted fields are left unchanged.
 */
class WebhookUpdateRequest implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $triggers;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var array
     */
    private $authToken = [];

    /**
     * @var bool|null
     */
    private $active;

    /**
     * Returns Triggers.
     * Replace the trigger list. Must be non-empty if provided.
     *
     * @return string[]|null
     */
    public function getTriggers(): ?array
    {
        return $this->triggers;
    }

    /**
     * Sets Triggers.
     * Replace the trigger list. Must be non-empty if provided.
     *
     * @maps triggers
     * @factory \UnivaPay\Models\WebhookTrigger::checkValue
     *
     * @param string[]|null $triggers
     */
    public function setTriggers(?array $triggers): void
    {
        $this->triggers = $triggers;
    }

    /**
     * Returns Url.
     * Update the webhook endpoint URL.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * Update the webhook endpoint URL.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Auth Token.
     * Update or clear the auth token. Send `null` to remove.
     */
    public function getAuthToken(): ?string
    {
        if (count($this->authToken) == 0) {
            return null;
        }
        return $this->authToken['value'];
    }

    /**
     * Sets Auth Token.
     * Update or clear the auth token. Send `null` to remove.
     *
     * @maps auth_token
     */
    public function setAuthToken(?string $authToken): void
    {
        $this->authToken['value'] = $authToken;
    }

    /**
     * Unsets Auth Token.
     * Update or clear the auth token. Send `null` to remove.
     */
    public function unsetAuthToken(): void
    {
        $this->authToken = [];
    }

    /**
     * Returns Active.
     * Enable or disable the webhook.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Enable or disable the webhook.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Converts the WebhookUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the WebhookUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WebhookUpdateRequest',
            [
                'triggers' => $this->triggers,
                'url' => $this->url,
                'authToken' => $this->getAuthToken(),
                'active' => $this->active,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['triggers', 'url', 'auth_token', 'active'];

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
        if (isset($this->triggers)) {
            $json['triggers']   = WebhookTrigger::checkValue($this->triggers);
        }
        if (isset($this->url)) {
            $json['url']        = $this->url;
        }
        if (!empty($this->authToken)) {
            $json['auth_token'] = $this->authToken['value'];
        }
        if (isset($this->active)) {
            $json['active']     = $this->active;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
