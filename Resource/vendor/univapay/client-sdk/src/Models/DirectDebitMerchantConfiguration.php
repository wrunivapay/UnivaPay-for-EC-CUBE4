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
 * The merchant's effective direct debit configuration.
 */
class DirectDebitMerchantConfiguration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $legacyId;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var string|null
     */
    private $debitDate;

    /**
     * @var string|null
     */
    private $consignorCode;

    /**
     * @var string|null
     */
    private $classifier;

    /**
     * @var string|null
     */
    private $signature;

    /**
     * Returns Legacy Id.
     * Identifier of the merchant in the legacy direct debit system.
     */
    public function getLegacyId(): ?string
    {
        return $this->legacyId;
    }

    /**
     * Sets Legacy Id.
     * Identifier of the merchant in the legacy direct debit system.
     *
     * @maps legacy_id
     */
    public function setLegacyId(?string $legacyId): void
    {
        $this->legacyId = $legacyId;
    }

    /**
     * Returns Enabled.
     * Whether direct debit is enabled for this merchant.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether direct debit is enabled for this merchant.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Debit Date.
     * Monthly debit cycle — funds are pulled on either the 14th or the 27th.
     */
    public function getDebitDate(): ?string
    {
        return $this->debitDate;
    }

    /**
     * Sets Debit Date.
     * Monthly debit cycle — funds are pulled on either the 14th or the 27th.
     *
     * @maps debit_date
     * @factory \UnivaPay\Models\DirectDebitDebitDate::checkValue
     */
    public function setDebitDate(?string $debitDate): void
    {
        $this->debitDate = $debitDate;
    }

    /**
     * Returns Consignor Code.
     * Consignor code (委託者コード) assigned by the collecting bank.
     */
    public function getConsignorCode(): ?string
    {
        return $this->consignorCode;
    }

    /**
     * Sets Consignor Code.
     * Consignor code (委託者コード) assigned by the collecting bank.
     *
     * @maps consignor_code
     */
    public function setConsignorCode(?string $consignorCode): void
    {
        $this->consignorCode = $consignorCode;
    }

    /**
     * Returns Classifier.
     * Transfer classification code (区分) agreed with the collecting bank.
     */
    public function getClassifier(): ?string
    {
        return $this->classifier;
    }

    /**
     * Sets Classifier.
     * Transfer classification code (区分) agreed with the collecting bank.
     *
     * @maps classifier
     */
    public function setClassifier(?string $classifier): void
    {
        $this->classifier = $classifier;
    }

    /**
     * Returns Signature.
     * Name printed on the consumer's bank statement (印字名), in half-width katakana.
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     * Name printed on the consumer's bank statement (印字名), in half-width katakana.
     *
     * @maps signature
     */
    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * Converts the DirectDebitMerchantConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the DirectDebitMerchantConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DirectDebitMerchantConfiguration',
            [
                'legacyId' => $this->legacyId,
                'enabled' => $this->enabled,
                'debitDate' => $this->debitDate,
                'consignorCode' => $this->consignorCode,
                'classifier' => $this->classifier,
                'signature' => $this->signature,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['legacy_id', 'enabled', 'debit_date', 'consignor_code', 'classifier', 'signature'];

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
        if (isset($this->legacyId)) {
            $json['legacy_id']      = $this->legacyId;
        }
        if (isset($this->enabled)) {
            $json['enabled']        = $this->enabled;
        }
        if (isset($this->debitDate)) {
            $json['debit_date']     = DirectDebitDebitDate::checkValue($this->debitDate);
        }
        if (isset($this->consignorCode)) {
            $json['consignor_code'] = $this->consignorCode;
        }
        if (isset($this->classifier)) {
            $json['classifier']     = $this->classifier;
        }
        if (isset($this->signature)) {
            $json['signature']      = $this->signature;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
