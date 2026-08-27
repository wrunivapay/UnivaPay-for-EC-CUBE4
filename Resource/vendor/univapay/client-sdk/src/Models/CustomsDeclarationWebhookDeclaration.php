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
 * WeChat customs declaration payload returned by the backend formatter.
 */
class CustomsDeclarationWebhookDeclaration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $customs;

    /**
     * @var string|null
     */
    private $merchantCustomsNo;

    /**
     * @var string|null
     */
    private $certificateId;

    /**
     * @var string|null
     */
    private $certificateName;

    /**
     * Returns Customs.
     * WeChat customs authority code.
     */
    public function getCustoms(): ?string
    {
        return $this->customs;
    }

    /**
     * Sets Customs.
     * WeChat customs authority code.
     *
     * @maps customs
     */
    public function setCustoms(?string $customs): void
    {
        $this->customs = $customs;
    }

    /**
     * Returns Merchant Customs No.
     * Merchant customs registration number.
     */
    public function getMerchantCustomsNo(): ?string
    {
        return $this->merchantCustomsNo;
    }

    /**
     * Sets Merchant Customs No.
     * Merchant customs registration number.
     *
     * @maps merchant_customs_no
     */
    public function setMerchantCustomsNo(?string $merchantCustomsNo): void
    {
        $this->merchantCustomsNo = $merchantCustomsNo;
    }

    /**
     * Returns Certificate Id.
     * Customer certificate or passport identifier.
     */
    public function getCertificateId(): ?string
    {
        return $this->certificateId;
    }

    /**
     * Sets Certificate Id.
     * Customer certificate or passport identifier.
     *
     * @maps certificate_id
     */
    public function setCertificateId(?string $certificateId): void
    {
        $this->certificateId = $certificateId;
    }

    /**
     * Returns Certificate Name.
     * Customer name as provided to customs.
     */
    public function getCertificateName(): ?string
    {
        return $this->certificateName;
    }

    /**
     * Sets Certificate Name.
     * Customer name as provided to customs.
     *
     * @maps certificate_name
     */
    public function setCertificateName(?string $certificateName): void
    {
        $this->certificateName = $certificateName;
    }

    /**
     * Converts the CustomsDeclarationWebhookDeclaration object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationWebhookDeclaration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationWebhookDeclaration',
            [
                'customs' => $this->customs,
                'merchantCustomsNo' => $this->merchantCustomsNo,
                'certificateId' => $this->certificateId,
                'certificateName' => $this->certificateName,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['customs', 'merchant_customs_no', 'certificate_id', 'certificate_name'];

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
        if (isset($this->customs)) {
            $json['customs']             = $this->customs;
        }
        if (isset($this->merchantCustomsNo)) {
            $json['merchant_customs_no'] = $this->merchantCustomsNo;
        }
        if (isset($this->certificateId)) {
            $json['certificate_id']      = $this->certificateId;
        }
        if (isset($this->certificateName)) {
            $json['certificate_name']    = $this->certificateName;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
