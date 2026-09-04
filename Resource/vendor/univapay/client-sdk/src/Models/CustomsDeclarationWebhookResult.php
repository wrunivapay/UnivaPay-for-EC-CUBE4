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
 * Result payload returned by the customs declaration formatter.
 */
class CustomsDeclarationWebhookResult implements \JsonSerializable
{
    /**
     * @var array
     */
    private $approvingAuthority = [];

    /**
     * @var array
     */
    private $tradeId = [];

    /**
     * @var array
     */
    private $transactionId = [];

    /**
     * @var array
     */
    private $chargeTransactionId = [];

    /**
     * Returns Approving Authority.
     * Customs authority that approved the declaration.
     */
    public function getApprovingAuthority(): ?string
    {
        if (count($this->approvingAuthority) == 0) {
            return null;
        }
        return $this->approvingAuthority['value'];
    }

    /**
     * Sets Approving Authority.
     * Customs authority that approved the declaration.
     *
     * @maps approving_authority
     */
    public function setApprovingAuthority(?string $approvingAuthority): void
    {
        $this->approvingAuthority['value'] = $approvingAuthority;
    }

    /**
     * Unsets Approving Authority.
     * Customs authority that approved the declaration.
     */
    public function unsetApprovingAuthority(): void
    {
        $this->approvingAuthority = [];
    }

    /**
     * Returns Trade Id.
     * Gateway trade identifier.
     */
    public function getTradeId(): ?string
    {
        if (count($this->tradeId) == 0) {
            return null;
        }
        return $this->tradeId['value'];
    }

    /**
     * Sets Trade Id.
     * Gateway trade identifier.
     *
     * @maps trade_id
     */
    public function setTradeId(?string $tradeId): void
    {
        $this->tradeId['value'] = $tradeId;
    }

    /**
     * Unsets Trade Id.
     * Gateway trade identifier.
     */
    public function unsetTradeId(): void
    {
        $this->tradeId = [];
    }

    /**
     * Returns Transaction Id.
     * Gateway transaction identifier for customs.
     */
    public function getTransactionId(): ?string
    {
        if (count($this->transactionId) == 0) {
            return null;
        }
        return $this->transactionId['value'];
    }

    /**
     * Sets Transaction Id.
     * Gateway transaction identifier for customs.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId['value'] = $transactionId;
    }

    /**
     * Unsets Transaction Id.
     * Gateway transaction identifier for customs.
     */
    public function unsetTransactionId(): void
    {
        $this->transactionId = [];
    }

    /**
     * Returns Charge Transaction Id.
     * Gateway charge transaction identifier linked to the declaration.
     */
    public function getChargeTransactionId(): ?string
    {
        if (count($this->chargeTransactionId) == 0) {
            return null;
        }
        return $this->chargeTransactionId['value'];
    }

    /**
     * Sets Charge Transaction Id.
     * Gateway charge transaction identifier linked to the declaration.
     *
     * @maps charge_transaction_id
     */
    public function setChargeTransactionId(?string $chargeTransactionId): void
    {
        $this->chargeTransactionId['value'] = $chargeTransactionId;
    }

    /**
     * Unsets Charge Transaction Id.
     * Gateway charge transaction identifier linked to the declaration.
     */
    public function unsetChargeTransactionId(): void
    {
        $this->chargeTransactionId = [];
    }

    /**
     * Converts the CustomsDeclarationWebhookResult object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationWebhookResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationWebhookResult',
            [
                'approvingAuthority' => $this->getApprovingAuthority(),
                'tradeId' => $this->getTradeId(),
                'transactionId' => $this->getTransactionId(),
                'chargeTransactionId' => $this->getChargeTransactionId(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['approving_authority', 'trade_id', 'transaction_id', 'charge_transaction_id'];

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
        if (!empty($this->approvingAuthority)) {
            $json['approving_authority']   = $this->approvingAuthority['value'];
        }
        if (!empty($this->tradeId)) {
            $json['trade_id']              = $this->tradeId['value'];
        }
        if (!empty($this->transactionId)) {
            $json['transaction_id']        = $this->transactionId['value'];
        }
        if (!empty($this->chargeTransactionId)) {
            $json['charge_transaction_id'] = $this->chargeTransactionId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
