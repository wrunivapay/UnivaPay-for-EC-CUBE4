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
 * Error payload returned when customs declaration processing fails.
 */
class CustomsDeclarationWebhookError implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var array
     */
    private $details = [];

    /**
     * @var array
     */
    private $others = [];

    /**
     * Returns Code.
     * Backend customs declaration error code.
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Backend customs declaration error code.
     *
     * @maps code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Message.
     * Human-readable backend error name.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Human-readable backend error name.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Details.
     * Optional backend-provided detail string.
     */
    public function getDetails(): ?string
    {
        if (count($this->details) == 0) {
            return null;
        }
        return $this->details['value'];
    }

    /**
     * Sets Details.
     * Optional backend-provided detail string.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details['value'] = $details;
    }

    /**
     * Unsets Details.
     * Optional backend-provided detail string.
     */
    public function unsetDetails(): void
    {
        $this->details = [];
    }

    /**
     * Returns Others.
     * Additional nested error records returned by the backend.
     *
     * @return CustomsDeclarationWebhookOtherError[]|null
     */
    public function getOthers(): ?array
    {
        if (count($this->others) == 0) {
            return null;
        }
        return $this->others['value'];
    }

    /**
     * Sets Others.
     * Additional nested error records returned by the backend.
     *
     * @maps others
     *
     * @param CustomsDeclarationWebhookOtherError[]|null $others
     */
    public function setOthers(?array $others): void
    {
        $this->others['value'] = $others;
    }

    /**
     * Unsets Others.
     * Additional nested error records returned by the backend.
     */
    public function unsetOthers(): void
    {
        $this->others = [];
    }

    /**
     * Converts the CustomsDeclarationWebhookError object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationWebhookError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationWebhookError',
            [
                'code' => $this->code,
                'message' => $this->message,
                'details' => $this->getDetails(),
                'others' => $this->getOthers(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['code', 'message', 'details', 'others'];

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
        if (isset($this->code)) {
            $json['code']    = $this->code;
        }
        if (isset($this->message)) {
            $json['message'] = $this->message;
        }
        if (!empty($this->details)) {
            $json['details'] = $this->details['value'];
        }
        if (!empty($this->others)) {
            $json['others']  = $this->others['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
