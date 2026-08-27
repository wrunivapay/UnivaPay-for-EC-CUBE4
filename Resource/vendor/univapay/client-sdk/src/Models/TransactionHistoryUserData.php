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
 * Payment-type-specific details for this row. This is a single flat object covering every payment type
 * — the fields actually populated depend on `payment_type` (documented per field below). Fields not
 * applicable to a given payment type are omitted.
 */
class TransactionHistoryUserData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $cardholderName;

    /**
     * @var array
     */
    private $cardholderEmailAddress = [];

    /**
     * @var array
     */
    private $cardholderPhoneNumber = [];

    /**
     * @var string|null
     */
    private $customerName;

    /**
     * @var string|null
     */
    private $convenienceStore;

    /**
     * @var array
     */
    private $brand = [];

    /**
     * @var array
     */
    private $gateway = [];

    /**
     * @var array
     */
    private $serviceProvider = [];

    /**
     * @var TransactionHistoryRefund[]|null
     */
    private $refunds;

    /**
     * @var array
     */
    private $reason = [];

    /**
     * Returns Type.
     * Whether this row represents a charge or a refund.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Whether this row represents a charge or a refund.
     *
     * @maps type
     * @factory \UnivaPay\Models\TransactionHistoryType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Cardholder Name.
     * Cardholder name. Present for `card` and `apple_pay` rows only.
     */
    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    /**
     * Sets Cardholder Name.
     * Cardholder name. Present for `card` and `apple_pay` rows only.
     *
     * @maps cardholder_name
     */
    public function setCardholderName(?string $cardholderName): void
    {
        $this->cardholderName = $cardholderName;
    }

    /**
     * Returns Cardholder Email Address.
     * Cardholder/customer email address. Present for every payment type except `konbini`'s legacy alias
     * fields; always non-null for `bank_transfer` rows, nullable for every other type.
     */
    public function getCardholderEmailAddress(): ?string
    {
        if (count($this->cardholderEmailAddress) == 0) {
            return null;
        }
        return $this->cardholderEmailAddress['value'];
    }

    /**
     * Sets Cardholder Email Address.
     * Cardholder/customer email address. Present for every payment type except `konbini`'s legacy alias
     * fields; always non-null for `bank_transfer` rows, nullable for every other type.
     *
     * @maps cardholder_email_address
     */
    public function setCardholderEmailAddress(?string $cardholderEmailAddress): void
    {
        $this->cardholderEmailAddress['value'] = $cardholderEmailAddress;
    }

    /**
     * Unsets Cardholder Email Address.
     * Cardholder/customer email address. Present for every payment type except `konbini`'s legacy alias
     * fields; always non-null for `bank_transfer` rows, nullable for every other type.
     */
    public function unsetCardholderEmailAddress(): void
    {
        $this->cardholderEmailAddress = [];
    }

    /**
     * Returns Cardholder Phone Number.
     * Cardholder phone number. Present for `paidy` rows only.
     */
    public function getCardholderPhoneNumber(): ?string
    {
        if (count($this->cardholderPhoneNumber) == 0) {
            return null;
        }
        return $this->cardholderPhoneNumber['value'];
    }

    /**
     * Sets Cardholder Phone Number.
     * Cardholder phone number. Present for `paidy` rows only.
     *
     * @maps cardholder_phone_number
     */
    public function setCardholderPhoneNumber(?string $cardholderPhoneNumber): void
    {
        $this->cardholderPhoneNumber['value'] = $cardholderPhoneNumber;
    }

    /**
     * Unsets Cardholder Phone Number.
     * Cardholder phone number. Present for `paidy` rows only.
     */
    public function unsetCardholderPhoneNumber(): void
    {
        $this->cardholderPhoneNumber = [];
    }

    /**
     * Returns Customer Name.
     * Customer name as entered at checkout. Present for `konbini` rows only (empty string when not
     * provided).
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     * Customer name as entered at checkout. Present for `konbini` rows only (empty string when not
     * provided).
     *
     * @maps customer_name
     */
    public function setCustomerName(?string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * Returns Convenience Store.
     * Legacy duplicate of `brand`. Present for `konbini` rows only.
     */
    public function getConvenienceStore(): ?string
    {
        return $this->convenienceStore;
    }

    /**
     * Sets Convenience Store.
     * Legacy duplicate of `brand`. Present for `konbini` rows only.
     *
     * @maps convenience_store
     */
    public function setConvenienceStore(?string $convenienceStore): void
    {
        $this->convenienceStore = $convenienceStore;
    }

    /**
     * Returns Brand.
     * Raw brand identifier for the payment method. Present for every payment type; the value set is
     * payment-type-specific (e.g. card brands for `card`/`apple_pay`, QR brands for
     * `qr_scan`/`qr_merchant`, online-wallet brands for `online`, convenience-store brands for `konbini`,
     * `paidy` for `paidy` rows). Nullable for `qr_scan`, `qr_merchant`, and `online`; always non-null for
     * the other types.
     */
    public function getBrand(): ?string
    {
        if (count($this->brand) == 0) {
            return null;
        }
        return $this->brand['value'];
    }

    /**
     * Sets Brand.
     * Raw brand identifier for the payment method. Present for every payment type; the value set is
     * payment-type-specific (e.g. card brands for `card`/`apple_pay`, QR brands for
     * `qr_scan`/`qr_merchant`, online-wallet brands for `online`, convenience-store brands for `konbini`,
     * `paidy` for `paidy` rows). Nullable for `qr_scan`, `qr_merchant`, and `online`; always non-null for
     * the other types.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand['value'] = $brand;
    }

    /**
     * Unsets Brand.
     * Raw brand identifier for the payment method. Present for every payment type; the value set is
     * payment-type-specific (e.g. card brands for `card`/`apple_pay`, QR brands for
     * `qr_scan`/`qr_merchant`, online-wallet brands for `online`, convenience-store brands for `konbini`,
     * `paidy` for `paidy` rows). Nullable for `qr_scan`, `qr_merchant`, and `online`; always non-null for
     * the other types.
     */
    public function unsetBrand(): void
    {
        $this->brand = [];
    }

    /**
     * Returns Gateway.
     * Raw gateway identifier that processed the payment. Present for every payment type.
     */
    public function getGateway(): ?string
    {
        if (count($this->gateway) == 0) {
            return null;
        }
        return $this->gateway['value'];
    }

    /**
     * Sets Gateway.
     * Raw gateway identifier that processed the payment. Present for every payment type.
     *
     * @maps gateway
     */
    public function setGateway(?string $gateway): void
    {
        $this->gateway['value'] = $gateway;
    }

    /**
     * Unsets Gateway.
     * Raw gateway identifier that processed the payment. Present for every payment type.
     */
    public function unsetGateway(): void
    {
        $this->gateway = [];
    }

    /**
     * Returns Service Provider.
     * Service provider, or `null` when not reported.
     */
    public function getServiceProvider(): ?string
    {
        if (count($this->serviceProvider) == 0) {
            return null;
        }
        return $this->serviceProvider['value'];
    }

    /**
     * Sets Service Provider.
     * Service provider, or `null` when not reported.
     *
     * @maps service_provider
     * @factory \UnivaPay\Models\TransactionHistoryServiceProvider::checkValue
     */
    public function setServiceProvider(?string $serviceProvider): void
    {
        $this->serviceProvider['value'] = $serviceProvider;
    }

    /**
     * Unsets Service Provider.
     * Service provider, or `null` when not reported.
     */
    public function unsetServiceProvider(): void
    {
        $this->serviceProvider = [];
    }

    /**
     * Returns Refunds.
     * Refunds issued against this charge. Present for charge rows only (`type: charge`); absent for refund
     * rows.
     *
     * @return TransactionHistoryRefund[]|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    /**
     * Sets Refunds.
     * Refunds issued against this charge. Present for charge rows only (`type: charge`); absent for refund
     * rows.
     *
     * @maps refunds
     *
     * @param TransactionHistoryRefund[]|null $refunds
     */
    public function setRefunds(?array $refunds): void
    {
        $this->refunds = $refunds;
    }

    /**
     * Returns Reason.
     * Refund reason, or `null` when unset.
     */
    public function getReason(): ?string
    {
        if (count($this->reason) == 0) {
            return null;
        }
        return $this->reason['value'];
    }

    /**
     * Sets Reason.
     * Refund reason, or `null` when unset.
     *
     * @maps reason
     * @factory \UnivaPay\Models\TransactionHistoryRefundReason::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason['value'] = $reason;
    }

    /**
     * Unsets Reason.
     * Refund reason, or `null` when unset.
     */
    public function unsetReason(): void
    {
        $this->reason = [];
    }

    /**
     * Converts the TransactionHistoryUserData object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionHistoryUserData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionHistoryUserData',
            [
                'type' => $this->type,
                'cardholderName' => $this->cardholderName,
                'cardholderEmailAddress' => $this->getCardholderEmailAddress(),
                'cardholderPhoneNumber' => $this->getCardholderPhoneNumber(),
                'customerName' => $this->customerName,
                'convenienceStore' => $this->convenienceStore,
                'brand' => $this->getBrand(),
                'gateway' => $this->getGateway(),
                'serviceProvider' => $this->getServiceProvider(),
                'refunds' => $this->refunds,
                'reason' => $this->getReason(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'type',
        'cardholder_name',
        'cardholder_email_address',
        'cardholder_phone_number',
        'customer_name',
        'convenience_store',
        'brand',
        'gateway',
        'service_provider',
        'refunds',
        'reason'
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
        if (isset($this->type)) {
            $json['type']                     = TransactionHistoryType::checkValue($this->type);
        }
        if (isset($this->cardholderName)) {
            $json['cardholder_name']          = $this->cardholderName;
        }
        if (!empty($this->cardholderEmailAddress)) {
            $json['cardholder_email_address'] = $this->cardholderEmailAddress['value'];
        }
        if (!empty($this->cardholderPhoneNumber)) {
            $json['cardholder_phone_number']  = $this->cardholderPhoneNumber['value'];
        }
        if (isset($this->customerName)) {
            $json['customer_name']            = $this->customerName;
        }
        if (isset($this->convenienceStore)) {
            $json['convenience_store']        = $this->convenienceStore;
        }
        if (!empty($this->brand)) {
            $json['brand']                    = $this->brand['value'];
        }
        if (!empty($this->gateway)) {
            $json['gateway']                  = $this->gateway['value'];
        }
        if (!empty($this->serviceProvider)) {
            $json['service_provider']         =
                TransactionHistoryServiceProvider::checkValue(
                    $this->serviceProvider['value']
                );
        }
        if (isset($this->refunds)) {
            $json['refunds']                  = $this->refunds;
        }
        if (!empty($this->reason)) {
            $json['reason']                   = TransactionHistoryRefundReason::checkValue($this->reason['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
