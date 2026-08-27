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
 * Nested customs-processing error entry returned in `others`.
 */
class CustomsDeclarationWebhookOtherError implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var array
     */
    private $credentialsId = [];

    /**
     * @var array
     */
    private $message = [];

    /**
     * @var array
     */
    private $itemName = [];

    /**
     * Returns Type.
     * Backend other-error type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Backend other-error type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Credentials Id.
     * Gateway credentials involved in the error when applicable.
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
     * Gateway credentials involved in the error when applicable.
     *
     * @maps credentials_id
     */
    public function setCredentialsId(?string $credentialsId): void
    {
        $this->credentialsId['value'] = $credentialsId;
    }

    /**
     * Unsets Credentials Id.
     * Gateway credentials involved in the error when applicable.
     */
    public function unsetCredentialsId(): void
    {
        $this->credentialsId = [];
    }

    /**
     * Returns Message.
     * Additional reason values for `not_selected_reasons`.
     *
     * @return string[]|null
     */
    public function getMessage(): ?array
    {
        if (count($this->message) == 0) {
            return null;
        }
        return $this->message['value'];
    }

    /**
     * Sets Message.
     * Additional reason values for `not_selected_reasons`.
     *
     * @maps message
     *
     * @param string[]|null $message
     */
    public function setMessage(?array $message): void
    {
        $this->message['value'] = $message;
    }

    /**
     * Unsets Message.
     * Additional reason values for `not_selected_reasons`.
     */
    public function unsetMessage(): void
    {
        $this->message = [];
    }

    /**
     * Returns Item Name.
     * Related item name for `related_item`.
     */
    public function getItemName(): ?string
    {
        if (count($this->itemName) == 0) {
            return null;
        }
        return $this->itemName['value'];
    }

    /**
     * Sets Item Name.
     * Related item name for `related_item`.
     *
     * @maps item_name
     */
    public function setItemName(?string $itemName): void
    {
        $this->itemName['value'] = $itemName;
    }

    /**
     * Unsets Item Name.
     * Related item name for `related_item`.
     */
    public function unsetItemName(): void
    {
        $this->itemName = [];
    }

    /**
     * Converts the CustomsDeclarationWebhookOtherError object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationWebhookOtherError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationWebhookOtherError',
            [
                'type' => $this->type,
                'credentialsId' => $this->getCredentialsId(),
                'message' => $this->getMessage(),
                'itemName' => $this->getItemName(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['type', 'credentials_id', 'message', 'item_name'];

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
        if (isset($this->type)) {
            $json['type']           = $this->type;
        }
        if (!empty($this->credentialsId)) {
            $json['credentials_id'] = $this->credentialsId['value'];
        }
        if (!empty($this->message)) {
            $json['message']        = $this->message['value'];
        }
        if (!empty($this->itemName)) {
            $json['item_name']      = $this->itemName['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
