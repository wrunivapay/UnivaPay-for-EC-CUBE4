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
 * Request body to create a new store-level webhook subscription.
 */
class WebhookCreateRequest implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $triggers;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $authToken = [];

    /**
     * @param string[] $triggers
     * @param string $url
     */
    public function __construct(array $triggers, string $url)
    {
        $this->triggers = $triggers;
        $this->url = $url;
    }

    /**
     * Returns Triggers.
     * List of event types that trigger this webhook. Must be non-empty and contain only events valid for
     * the store level.
     *
     * @return string[]
     */
    public function getTriggers(): array
    {
        return $this->triggers;
    }

    /**
     * Sets Triggers.
     * List of event types that trigger this webhook. Must be non-empty and contain only events valid for
     * the store level.
     *
     * @required
     * @maps triggers
     * @factory \UnivaPay\Models\WebhookTrigger::checkValue
     *
     * @param string[] $triggers
     */
    public function setTriggers(array $triggers): void
    {
        $this->triggers = $triggers;
    }

    /**
     * Returns Url.
     * The URL to POST webhook payloads to.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The URL to POST webhook payloads to.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Auth Token.
     * Optional bearer token sent in the `Authorization` header of webhook requests.
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
     * Optional bearer token sent in the `Authorization` header of webhook requests.
     *
     * @maps auth_token
     */
    public function setAuthToken(?string $authToken): void
    {
        $this->authToken['value'] = $authToken;
    }

    /**
     * Unsets Auth Token.
     * Optional bearer token sent in the `Authorization` header of webhook requests.
     */
    public function unsetAuthToken(): void
    {
        $this->authToken = [];
    }

    /**
     * Converts the WebhookCreateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the WebhookCreateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WebhookCreateRequest',
            [
                'triggers' => $this->triggers,
                'url' => $this->url,
                'authToken' => $this->getAuthToken(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['triggers', 'url', 'auth_token'];

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
        $json['triggers']       = WebhookTrigger::checkValue($this->triggers);
        $json['url']            = $this->url;
        if (!empty($this->authToken)) {
            $json['auth_token'] = $this->authToken['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
