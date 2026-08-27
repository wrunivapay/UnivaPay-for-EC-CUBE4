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
 * Feature support and capability flags for a single payment-type / brand combination the store can
 * accept.
 */
class CheckoutSupportedBrand implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $cardBrand;

    /**
     * @var string|null
     */
    private $qrBrand;

    /**
     * @var string|null
     */
    private $onlineBrand;

    /**
     * @var bool|null
     */
    private $dynamicInfo;

    /**
     * @var bool|null
     */
    private $supportAuthCapture;

    /**
     * @var bool|null
     */
    private $requiresFullName;

    /**
     * @var bool|null
     */
    private $requiresCvv;

    /**
     * @var array
     */
    private $countriesAllowed = [];

    /**
     * @var array
     */
    private $supportedCurrencies = [];

    /**
     * @var bool|null
     */
    private $cvvAuth;

    /**
     * @var bool|null
     */
    private $installmentCapable;

    /**
     * @var bool|null
     */
    private $mcpCapable;

    /**
     * @var bool|null
     */
    private $mcpOnly;

    /**
     * Returns Payment Type.
     * Payment type identifier used throughout the checkout configuration.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Payment type identifier used throughout the checkout configuration.
     *
     * @maps payment_type
     * @factory \UnivaPay\Models\CheckoutPaymentType::checkValue
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Brand.
     * Brand identifier for `payment_type`. For `card` and `apple_pay`, one of the common `CardBrand`
     * values (`visa`, `mastercard`, `american_express`, `maestro`, `discover`, `jcb`, `diners_club`,
     * `private_label`, `unionpay`) or an `unmapped_<raw value>` fallback. For `qr_scan`, a QR-CPM brand (e.
     * g. `pay_pay`, `we_chat`, `qq`, `line_pay`, `au_pay`, `alipay_china`). For `qr_merchant`, a QR-MPM
     * brand (e.g. `rakuten_pay_merchant`, `alipay_merchant_qr`, `pay_pay_merchant`, `d_barai_mpm`,
     * `we_chat_mpm`). For `online`, an online-redirect brand (e.g. `alipay_online`, `pay_pay_online`,
     * `we_chat_online`, `d_barai_online`, `kakaopay`). For `konbini`, a convenience-store brand (e.g.
     * `seven_eleven`, `family_mart`, `lawson`). For `paidy` and `bank_transfer`, the payment type's own
     * identifier. The full brand catalogue is large and gateway-dependent — treat this as an open string,
     * not a fixed set.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * Brand identifier for `payment_type`. For `card` and `apple_pay`, one of the common `CardBrand`
     * values (`visa`, `mastercard`, `american_express`, `maestro`, `discover`, `jcb`, `diners_club`,
     * `private_label`, `unionpay`) or an `unmapped_<raw value>` fallback. For `qr_scan`, a QR-CPM brand (e.
     * g. `pay_pay`, `we_chat`, `qq`, `line_pay`, `au_pay`, `alipay_china`). For `qr_merchant`, a QR-MPM
     * brand (e.g. `rakuten_pay_merchant`, `alipay_merchant_qr`, `pay_pay_merchant`, `d_barai_mpm`,
     * `we_chat_mpm`). For `online`, an online-redirect brand (e.g. `alipay_online`, `pay_pay_online`,
     * `we_chat_online`, `d_barai_online`, `kakaopay`). For `konbini`, a convenience-store brand (e.g.
     * `seven_eleven`, `family_mart`, `lawson`). For `paidy` and `bank_transfer`, the payment type's own
     * identifier. The full brand catalogue is large and gateway-dependent — treat this as an open string,
     * not a fixed set.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Card Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `card` or `apple_pay`.
     */
    public function getCardBrand(): ?string
    {
        return $this->cardBrand;
    }

    /**
     * Sets Card Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `card` or `apple_pay`.
     *
     * @maps card_brand
     */
    public function setCardBrand(?string $cardBrand): void
    {
        $this->cardBrand = $cardBrand;
    }

    /**
     * Returns Qr Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `qr_merchant`.
     */
    public function getQrBrand(): ?string
    {
        return $this->qrBrand;
    }

    /**
     * Sets Qr Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `qr_merchant`.
     *
     * @maps qr_brand
     */
    public function setQrBrand(?string $qrBrand): void
    {
        $this->qrBrand = $qrBrand;
    }

    /**
     * Returns Online Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `online`.
     */
    public function getOnlineBrand(): ?string
    {
        return $this->onlineBrand;
    }

    /**
     * Sets Online Brand.
     * Legacy alias of `brand`. Present only when `payment_type` is `online`.
     *
     * @maps online_brand
     */
    public function setOnlineBrand(?string $onlineBrand): void
    {
        $this->onlineBrand = $onlineBrand;
    }

    /**
     * Returns Dynamic Info.
     * Whether the brand's supported feature set is resolved dynamically.
     */
    public function getDynamicInfo(): ?bool
    {
        return $this->dynamicInfo;
    }

    /**
     * Sets Dynamic Info.
     * Whether the brand's supported feature set is resolved dynamically.
     *
     * @maps dynamic_info
     */
    public function setDynamicInfo(?bool $dynamicInfo): void
    {
        $this->dynamicInfo = $dynamicInfo;
    }

    /**
     * Returns Support Auth Capture.
     * Whether the brand supports separate authorization and capture.
     */
    public function getSupportAuthCapture(): ?bool
    {
        return $this->supportAuthCapture;
    }

    /**
     * Sets Support Auth Capture.
     * Whether the brand supports separate authorization and capture.
     *
     * @maps support_auth_capture
     */
    public function setSupportAuthCapture(?bool $supportAuthCapture): void
    {
        $this->supportAuthCapture = $supportAuthCapture;
    }

    /**
     * Returns Requires Full Name.
     * Whether the brand requires the cardholder's full name.
     */
    public function getRequiresFullName(): ?bool
    {
        return $this->requiresFullName;
    }

    /**
     * Sets Requires Full Name.
     * Whether the brand requires the cardholder's full name.
     *
     * @maps requires_full_name
     */
    public function setRequiresFullName(?bool $requiresFullName): void
    {
        $this->requiresFullName = $requiresFullName;
    }

    /**
     * Returns Requires Cvv.
     * Whether the brand requires a CVV.
     */
    public function getRequiresCvv(): ?bool
    {
        return $this->requiresCvv;
    }

    /**
     * Sets Requires Cvv.
     * Whether the brand requires a CVV.
     *
     * @maps requires_cvv
     */
    public function setRequiresCvv(?bool $requiresCvv): void
    {
        $this->requiresCvv = $requiresCvv;
    }

    /**
     * Returns Countries Allowed.
     * ISO 3166-1 alpha-2 country codes allowed for this brand. `null` when unrestricted.
     *
     * @return string[]|null
     */
    public function getCountriesAllowed(): ?array
    {
        if (count($this->countriesAllowed) == 0) {
            return null;
        }
        return $this->countriesAllowed['value'];
    }

    /**
     * Sets Countries Allowed.
     * ISO 3166-1 alpha-2 country codes allowed for this brand. `null` when unrestricted.
     *
     * @maps countries_allowed
     *
     * @param string[]|null $countriesAllowed
     */
    public function setCountriesAllowed(?array $countriesAllowed): void
    {
        $this->countriesAllowed['value'] = $countriesAllowed;
    }

    /**
     * Unsets Countries Allowed.
     * ISO 3166-1 alpha-2 country codes allowed for this brand. `null` when unrestricted.
     */
    public function unsetCountriesAllowed(): void
    {
        $this->countriesAllowed = [];
    }

    /**
     * Returns Supported Currencies.
     * ISO-4217 currency codes supported by this brand. `null` when unrestricted.
     *
     * @return string[]|null
     */
    public function getSupportedCurrencies(): ?array
    {
        if (count($this->supportedCurrencies) == 0) {
            return null;
        }
        return $this->supportedCurrencies['value'];
    }

    /**
     * Sets Supported Currencies.
     * ISO-4217 currency codes supported by this brand. `null` when unrestricted.
     *
     * @maps supported_currencies
     *
     * @param string[]|null $supportedCurrencies
     */
    public function setSupportedCurrencies(?array $supportedCurrencies): void
    {
        $this->supportedCurrencies['value'] = $supportedCurrencies;
    }

    /**
     * Unsets Supported Currencies.
     * ISO-4217 currency codes supported by this brand. `null` when unrestricted.
     */
    public function unsetSupportedCurrencies(): void
    {
        $this->supportedCurrencies = [];
    }

    /**
     * Returns Cvv Auth.
     * Whether this brand supports CVV-only authorization.
     */
    public function getCvvAuth(): ?bool
    {
        return $this->cvvAuth;
    }

    /**
     * Sets Cvv Auth.
     * Whether this brand supports CVV-only authorization.
     *
     * @maps cvv_auth
     */
    public function setCvvAuth(?bool $cvvAuth): void
    {
        $this->cvvAuth = $cvvAuth;
    }

    /**
     * Returns Installment Capable.
     * Whether this brand supports installment plans.
     */
    public function getInstallmentCapable(): ?bool
    {
        return $this->installmentCapable;
    }

    /**
     * Sets Installment Capable.
     * Whether this brand supports installment plans.
     *
     * @maps installment_capable
     */
    public function setInstallmentCapable(?bool $installmentCapable): void
    {
        $this->installmentCapable = $installmentCapable;
    }

    /**
     * Returns Mcp Capable.
     * Whether this brand supports multi-currency pricing.
     */
    public function getMcpCapable(): ?bool
    {
        return $this->mcpCapable;
    }

    /**
     * Sets Mcp Capable.
     * Whether this brand supports multi-currency pricing.
     *
     * @maps mcp_capable
     */
    public function setMcpCapable(?bool $mcpCapable): void
    {
        $this->mcpCapable = $mcpCapable;
    }

    /**
     * Returns Mcp Only.
     * Whether this brand is only available through multi-currency pricing.
     */
    public function getMcpOnly(): ?bool
    {
        return $this->mcpOnly;
    }

    /**
     * Sets Mcp Only.
     * Whether this brand is only available through multi-currency pricing.
     *
     * @maps mcp_only
     */
    public function setMcpOnly(?bool $mcpOnly): void
    {
        $this->mcpOnly = $mcpOnly;
    }

    /**
     * Converts the CheckoutSupportedBrand object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutSupportedBrand object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutSupportedBrand',
            [
                'paymentType' => $this->paymentType,
                'brand' => $this->brand,
                'cardBrand' => $this->cardBrand,
                'qrBrand' => $this->qrBrand,
                'onlineBrand' => $this->onlineBrand,
                'dynamicInfo' => $this->dynamicInfo,
                'supportAuthCapture' => $this->supportAuthCapture,
                'requiresFullName' => $this->requiresFullName,
                'requiresCvv' => $this->requiresCvv,
                'countriesAllowed' => $this->getCountriesAllowed(),
                'supportedCurrencies' => $this->getSupportedCurrencies(),
                'cvvAuth' => $this->cvvAuth,
                'installmentCapable' => $this->installmentCapable,
                'mcpCapable' => $this->mcpCapable,
                'mcpOnly' => $this->mcpOnly,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'payment_type',
        'brand',
        'card_brand',
        'qr_brand',
        'online_brand',
        'dynamic_info',
        'support_auth_capture',
        'requires_full_name',
        'requires_cvv',
        'countries_allowed',
        'supported_currencies',
        'cvv_auth',
        'installment_capable',
        'mcp_capable',
        'mcp_only'
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
        if (isset($this->paymentType)) {
            $json['payment_type']         = CheckoutPaymentType::checkValue($this->paymentType);
        }
        if (isset($this->brand)) {
            $json['brand']                = $this->brand;
        }
        if (isset($this->cardBrand)) {
            $json['card_brand']           = $this->cardBrand;
        }
        if (isset($this->qrBrand)) {
            $json['qr_brand']             = $this->qrBrand;
        }
        if (isset($this->onlineBrand)) {
            $json['online_brand']         = $this->onlineBrand;
        }
        if (isset($this->dynamicInfo)) {
            $json['dynamic_info']         = $this->dynamicInfo;
        }
        if (isset($this->supportAuthCapture)) {
            $json['support_auth_capture'] = $this->supportAuthCapture;
        }
        if (isset($this->requiresFullName)) {
            $json['requires_full_name']   = $this->requiresFullName;
        }
        if (isset($this->requiresCvv)) {
            $json['requires_cvv']         = $this->requiresCvv;
        }
        if (!empty($this->countriesAllowed)) {
            $json['countries_allowed']    = $this->countriesAllowed['value'];
        }
        if (!empty($this->supportedCurrencies)) {
            $json['supported_currencies'] = $this->supportedCurrencies['value'];
        }
        if (isset($this->cvvAuth)) {
            $json['cvv_auth']             = $this->cvvAuth;
        }
        if (isset($this->installmentCapable)) {
            $json['installment_capable']  = $this->installmentCapable;
        }
        if (isset($this->mcpCapable)) {
            $json['mcp_capable']          = $this->mcpCapable;
        }
        if (isset($this->mcpOnly)) {
            $json['mcp_only']             = $this->mcpOnly;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
