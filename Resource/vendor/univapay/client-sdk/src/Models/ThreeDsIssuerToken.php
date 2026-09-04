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
 * 3-D Secure issuer token payload.
 */
class ThreeDsIssuerToken implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string
     */
    private $issuerToken;

    /**
     * @var string
     */
    private $callMethod;

    /**
     * @var array
     */
    private $payload = [];

    /**
     * @var string
     */
    private $contentType;

    /**
     * @param string $issuerToken
     * @param string $contentType
     */
    public function __construct(string $issuerToken, string $contentType)
    {
        $this->issuerToken = $issuerToken;
        $this->contentType = $contentType;
    }

    /**
     * Returns Payment Type.
     * Only 'card' is supported for 3-D Secure issuer tokens.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Only 'card' is supported for 3-D Secure issuer tokens.
     *
     * @maps payment_type
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Issuer Token.
     * The 3-D Secure authentication URL to which the client must send the request.
     */
    public function getIssuerToken(): string
    {
        return $this->issuerToken;
    }

    /**
     * Sets Issuer Token.
     * The 3-D Secure authentication URL to which the client must send the request.
     *
     * @required
     * @maps issuer_token
     */
    public function setIssuerToken(string $issuerToken): void
    {
        $this->issuerToken = $issuerToken;
    }

    /**
     * Returns Call Method.
     * Execution method. Currently, only 'http_post' is supported.
     */
    public function getCallMethod(): string
    {
        return $this->callMethod;
    }

    /**
     * Sets Call Method.
     * Execution method. Currently, only 'http_post' is supported.
     *
     * @maps call_method
     */
    public function setCallMethod(string $callMethod): void
    {
        $this->callMethod = $callMethod;
    }

    /**
     * Returns Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     */
    public function getPayload(): ?IssuerTokenPayload
    {
        if (count($this->payload) == 0) {
            return null;
        }
        return $this->payload['value'];
    }

    /**
     * Sets Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     *
     * @maps payload
     */
    public function setPayload(?IssuerTokenPayload $payload): void
    {
        $this->payload['value'] = $payload;
    }

    /**
     * Unsets Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     */
    public function unsetPayload(): void
    {
        $this->payload = [];
    }

    /**
     * Returns Content Type.
     * The expected content type of the payload required by the card issuer's endpoint  (e.g.,
     * 'application/x-www-form-urlencoded; charset=UTF-8').
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * Sets Content Type.
     * The expected content type of the payload required by the card issuer's endpoint  (e.g.,
     * 'application/x-www-form-urlencoded; charset=UTF-8').
     *
     * @required
     * @maps content_type
     */
    public function setContentType(string $contentType): void
    {
        $this->contentType = $contentType;
    }

    /**
     * Converts the ThreeDsIssuerToken object to a human-readable string representation.
     *
     * @return string The string representation of the ThreeDsIssuerToken object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ThreeDsIssuerToken',
            [
                'paymentType' => $this->paymentType,
                'issuerToken' => $this->issuerToken,
                'callMethod' => $this->callMethod,
                'payload' => $this->getPayload(),
                'contentType' => $this->contentType,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['payment_type', 'issuer_token', 'call_method', 'payload', 'content_type'];

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
        $json['payment_type'] = $this->paymentType;
        $json['issuer_token'] = $this->issuerToken;
        $json['call_method']  = $this->callMethod;
        if (!empty($this->payload)) {
            $json['payload']  = $this->payload['value'];
        }
        $json['content_type'] = $this->contentType;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
