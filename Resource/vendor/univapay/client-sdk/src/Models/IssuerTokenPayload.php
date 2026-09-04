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
 * A dictionary containing necessary key-value pairs for sending the request.
 */
class IssuerTokenPayload implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $requestData;

    /**
     * @var string|null
     */
    private $sSpcd;

    /**
     * @var string|null
     */
    private $sCptok;

    /**
     * @var string|null
     */
    private $sTerkn;

    /**
     * Returns Request Data.
     * Generic payload key used by most payment providers.
     */
    public function getRequestData(): ?string
    {
        return $this->requestData;
    }

    /**
     * Sets Request Data.
     * Generic payload key used by most payment providers.
     *
     * @maps request_data
     */
    public function setRequestData(?string $requestData): void
    {
        $this->requestData = $requestData;
    }

    /**
     * Returns S Spcd.
     * d-barai payment service code.
     */
    public function getSSpcd(): ?string
    {
        return $this->sSpcd;
    }

    /**
     * Sets S Spcd.
     * d-barai payment service code.
     *
     * @maps sSpcd
     */
    public function setSSpcd(?string $sSpcd): void
    {
        $this->sSpcd = $sSpcd;
    }

    /**
     * Returns S Cptok.
     * d-barai coupon token.
     */
    public function getSCptok(): ?string
    {
        return $this->sCptok;
    }

    /**
     * Sets S Cptok.
     * d-barai coupon token.
     *
     * @maps sCptok
     */
    public function setSCptok(?string $sCptok): void
    {
        $this->sCptok = $sCptok;
    }

    /**
     * Returns S Terkn.
     * d-barai terminal key.
     */
    public function getSTerkn(): ?string
    {
        return $this->sTerkn;
    }

    /**
     * Sets S Terkn.
     * d-barai terminal key.
     *
     * @maps sTerkn
     */
    public function setSTerkn(?string $sTerkn): void
    {
        $this->sTerkn = $sTerkn;
    }

    /**
     * Converts the IssuerTokenPayload object to a human-readable string representation.
     *
     * @return string The string representation of the IssuerTokenPayload object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'IssuerTokenPayload',
            [
                'requestData' => $this->requestData,
                'sSpcd' => $this->sSpcd,
                'sCptok' => $this->sCptok,
                'sTerkn' => $this->sTerkn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['request_data', 'sSpcd', 'sCptok', 'sTerkn'];

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
        if (isset($this->requestData)) {
            $json['request_data'] = $this->requestData;
        }
        if (isset($this->sSpcd)) {
            $json['sSpcd']        = $this->sSpcd;
        }
        if (isset($this->sCptok)) {
            $json['sCptok']       = $this->sCptok;
        }
        if (isset($this->sTerkn)) {
            $json['sTerkn']       = $this->sTerkn;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
