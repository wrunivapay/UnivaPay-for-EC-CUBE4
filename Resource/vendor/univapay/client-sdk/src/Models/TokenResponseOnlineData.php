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
 * Token Response Online Data schema.
 */
class TokenResponseOnlineData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $callMethod;

    /**
     * @var array
     */
    private $osType = [];

    /**
     * @var array
     */
    private $userIdentifier = [];

    /**
     * @var array
     */
    private $userIdentifierSource = [];

    /**
     * @var array
     */
    private $issuerToken = [];

    /**
     * @var array
     */
    private $issuerTokenPayload = [];

    /**
     * Returns Brand.
     * Base Online Data Brand schema. `alipay_china`, `alipay_hk`, `gcash`, `dana`, `truemoney`, `kakaopay`,
     * `tng`, `rabbit_line_pay`, `bpi`, `boost`, `tinaba`, `naver_pay`, `toss_pay`, `maya`, `grab_sg`,
     * `kredivo_id`, `k_plus`, and `kaspi_kz` are Alipay+ regional wallets routed through the
     * `alipay_plus_online` gateway family.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * Base Online Data Brand schema. `alipay_china`, `alipay_hk`, `gcash`, `dana`, `truemoney`, `kakaopay`,
     * `tng`, `rabbit_line_pay`, `bpi`, `boost`, `tinaba`, `naver_pay`, `toss_pay`, `maya`, `grab_sg`,
     * `kredivo_id`, `k_plus`, and `kaspi_kz` are Alipay+ regional wallets routed through the
     * `alipay_plus_online` gateway family.
     *
     * @maps brand
     * @factory \UnivaPay\Models\BaseOnlineDataBrand::checkValue
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Call Method.
     * Base Online Data Call Method schema.
     */
    public function getCallMethod(): ?string
    {
        return $this->callMethod;
    }

    /**
     * Sets Call Method.
     * Base Online Data Call Method schema.
     *
     * @maps call_method
     * @factory \UnivaPay\Models\BaseOnlineDataCallMethod::checkValue
     */
    public function setCallMethod(?string $callMethod): void
    {
        $this->callMethod = $callMethod;
    }

    /**
     * Returns Os Type.
     * Base Online Data Os Type schema.
     */
    public function getOsType(): ?string
    {
        if (count($this->osType) == 0) {
            return null;
        }
        return $this->osType['value'];
    }

    /**
     * Sets Os Type.
     * Base Online Data Os Type schema.
     *
     * @maps os_type
     * @factory \UnivaPay\Models\BaseOnlineDataOsType::checkValue
     */
    public function setOsType(?string $osType): void
    {
        $this->osType['value'] = $osType;
    }

    /**
     * Unsets Os Type.
     * Base Online Data Os Type schema.
     */
    public function unsetOsType(): void
    {
        $this->osType = [];
    }

    /**
     * Returns User Identifier.
     * Consumer specific identifier required by some gateways for fraud prevention.
     */
    public function getUserIdentifier(): ?string
    {
        if (count($this->userIdentifier) == 0) {
            return null;
        }
        return $this->userIdentifier['value'];
    }

    /**
     * Sets User Identifier.
     * Consumer specific identifier required by some gateways for fraud prevention.
     *
     * @maps user_identifier
     */
    public function setUserIdentifier(?string $userIdentifier): void
    {
        $this->userIdentifier['value'] = $userIdentifier;
    }

    /**
     * Unsets User Identifier.
     * Consumer specific identifier required by some gateways for fraud prevention.
     */
    public function unsetUserIdentifier(): void
    {
        $this->userIdentifier = [];
    }

    /**
     * Returns User Identifier Source.
     * The source of the user identifier
     */
    public function getUserIdentifierSource(): ?string
    {
        if (count($this->userIdentifierSource) == 0) {
            return null;
        }
        return $this->userIdentifierSource['value'];
    }

    /**
     * Sets User Identifier Source.
     * The source of the user identifier
     *
     * @maps user_identifier_source
     * @factory \UnivaPay\Models\BaseOnlineDataUserIdentifierSource::checkValue
     */
    public function setUserIdentifierSource(?string $userIdentifierSource): void
    {
        $this->userIdentifierSource['value'] = $userIdentifierSource;
    }

    /**
     * Unsets User Identifier Source.
     * The source of the user identifier
     */
    public function unsetUserIdentifierSource(): void
    {
        $this->userIdentifierSource = [];
    }

    /**
     * Returns Issuer Token.
     * Token provided by the issuer (if applicable).
     */
    public function getIssuerToken(): ?string
    {
        if (count($this->issuerToken) == 0) {
            return null;
        }
        return $this->issuerToken['value'];
    }

    /**
     * Sets Issuer Token.
     * Token provided by the issuer (if applicable).
     *
     * @maps issuer_token
     */
    public function setIssuerToken(?string $issuerToken): void
    {
        $this->issuerToken['value'] = $issuerToken;
    }

    /**
     * Unsets Issuer Token.
     * Token provided by the issuer (if applicable).
     */
    public function unsetIssuerToken(): void
    {
        $this->issuerToken = [];
    }

    /**
     * Returns Issuer Token Payload.
     * Additional payload from the issuer.
     */
    public function getIssuerTokenPayload(): ?string
    {
        if (count($this->issuerTokenPayload) == 0) {
            return null;
        }
        return $this->issuerTokenPayload['value'];
    }

    /**
     * Sets Issuer Token Payload.
     * Additional payload from the issuer.
     *
     * @maps issuer_token_payload
     */
    public function setIssuerTokenPayload(?string $issuerTokenPayload): void
    {
        $this->issuerTokenPayload['value'] = $issuerTokenPayload;
    }

    /**
     * Unsets Issuer Token Payload.
     * Additional payload from the issuer.
     */
    public function unsetIssuerTokenPayload(): void
    {
        $this->issuerTokenPayload = [];
    }

    /**
     * Converts the TokenResponseOnlineData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseOnlineData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseOnlineData',
            [
                'brand' => $this->brand,
                'callMethod' => $this->callMethod,
                'osType' => $this->getOsType(),
                'userIdentifier' => $this->getUserIdentifier(),
                'userIdentifierSource' => $this->getUserIdentifierSource(),
                'issuerToken' => $this->getIssuerToken(),
                'issuerTokenPayload' => $this->getIssuerTokenPayload(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'brand',
        'call_method',
        'os_type',
        'user_identifier',
        'user_identifier_source',
        'issuer_token',
        'issuer_token_payload'
    ];

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
        if (isset($this->brand)) {
            $json['brand']                  = BaseOnlineDataBrand::checkValue($this->brand);
        }
        if (isset($this->callMethod)) {
            $json['call_method']            = BaseOnlineDataCallMethod::checkValue($this->callMethod);
        }
        if (!empty($this->osType)) {
            $json['os_type']                = BaseOnlineDataOsType::checkValue($this->osType['value']);
        }
        if (!empty($this->userIdentifier)) {
            $json['user_identifier']        = $this->userIdentifier['value'];
        }
        if (!empty($this->userIdentifierSource)) {
            $json['user_identifier_source'] =
                BaseOnlineDataUserIdentifierSource::checkValue(
                    $this->userIdentifierSource['value']
                );
        }
        if (!empty($this->issuerToken)) {
            $json['issuer_token']           = $this->issuerToken['value'];
        }
        if (!empty($this->issuerTokenPayload)) {
            $json['issuer_token_payload']   = $this->issuerTokenPayload['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
