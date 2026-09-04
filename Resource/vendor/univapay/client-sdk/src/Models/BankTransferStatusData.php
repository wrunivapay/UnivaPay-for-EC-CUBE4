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
use UnivaPay\Utils\DateTimeHelper;

/**
 * Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension
 * fields inlined alongside amount and metadata.
 */
class BankTransferStatusData implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var string|null
     */
    private $chargeId;

    /**
     * @var string|null
     */
    private $paymentStatus;

    /**
     * @var array
     */
    private $latestDepositDate = [];

    /**
     * @var array
     */
    private $createdOn = [];

    /**
     * @var array
     */
    private $latestDepositAmount = [];

    /**
     * @var array
     */
    private $balance = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var array
     */
    private $amountDifference = [];

    /**
     * @var GenericMetadata|null
     */
    private $tokenMetadata;

    /**
     * @var GenericMetadata|null
     */
    private $chargeMetadata;

    /**
     * Returns Id.
     * Bank transfer charge extension ID.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     * Bank transfer charge extension ID.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     * Bank transfer charge extension ID.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Charge Id.
     * ID of the associated charge.
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    /**
     * Sets Charge Id.
     * ID of the associated charge.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId = $chargeId;
    }

    /**
     * Returns Payment Status.
     * Payment status of a bank transfer charge.
     */
    public function getPaymentStatus(): ?string
    {
        return $this->paymentStatus;
    }

    /**
     * Sets Payment Status.
     * Payment status of a bank transfer charge.
     *
     * @maps payment_status
     * @factory \UnivaPay\Models\BankTransferPaymentStatus::checkValue
     */
    public function setPaymentStatus(?string $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    /**
     * Returns Latest Deposit Date.
     * Date of the most recent deposit.
     */
    public function getLatestDepositDate(): ?\DateTime
    {
        if (count($this->latestDepositDate) == 0) {
            return null;
        }
        return $this->latestDepositDate['value'];
    }

    /**
     * Sets Latest Deposit Date.
     * Date of the most recent deposit.
     *
     * @maps latest_deposit_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLatestDepositDate(?\DateTime $latestDepositDate): void
    {
        $this->latestDepositDate['value'] = $latestDepositDate;
    }

    /**
     * Unsets Latest Deposit Date.
     * Date of the most recent deposit.
     */
    public function unsetLatestDepositDate(): void
    {
        $this->latestDepositDate = [];
    }

    /**
     * Returns Created On.
     * When the bank transfer extension record was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        if (count($this->createdOn) == 0) {
            return null;
        }
        return $this->createdOn['value'];
    }

    /**
     * Sets Created On.
     * When the bank transfer extension record was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn['value'] = $createdOn;
    }

    /**
     * Unsets Created On.
     * When the bank transfer extension record was created.
     */
    public function unsetCreatedOn(): void
    {
        $this->createdOn = [];
    }

    /**
     * Returns Latest Deposit Amount.
     * Amount of the most recent deposit in minor currency units.
     */
    public function getLatestDepositAmount(): ?int
    {
        if (count($this->latestDepositAmount) == 0) {
            return null;
        }
        return $this->latestDepositAmount['value'];
    }

    /**
     * Sets Latest Deposit Amount.
     * Amount of the most recent deposit in minor currency units.
     *
     * @maps latest_deposit_amount
     */
    public function setLatestDepositAmount(?int $latestDepositAmount): void
    {
        $this->latestDepositAmount['value'] = $latestDepositAmount;
    }

    /**
     * Unsets Latest Deposit Amount.
     * Amount of the most recent deposit in minor currency units.
     */
    public function unsetLatestDepositAmount(): void
    {
        $this->latestDepositAmount = [];
    }

    /**
     * Returns Balance.
     * Current outstanding balance in minor currency units.
     */
    public function getBalance(): ?int
    {
        if (count($this->balance) == 0) {
            return null;
        }
        return $this->balance['value'];
    }

    /**
     * Sets Balance.
     * Current outstanding balance in minor currency units.
     *
     * @maps balance
     */
    public function setBalance(?int $balance): void
    {
        $this->balance['value'] = $balance;
    }

    /**
     * Unsets Balance.
     * Current outstanding balance in minor currency units.
     */
    public function unsetBalance(): void
    {
        $this->balance = [];
    }

    /**
     * Returns Currency.
     * ISO 4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO 4217 currency code.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Amount.
     * Total charge amount in minor currency units.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Total charge amount in minor currency units.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Amount Difference.
     * Difference between paid and expected amount (positive = over, negative = under).
     */
    public function getAmountDifference(): ?int
    {
        if (count($this->amountDifference) == 0) {
            return null;
        }
        return $this->amountDifference['value'];
    }

    /**
     * Sets Amount Difference.
     * Difference between paid and expected amount (positive = over, negative = under).
     *
     * @maps amount_difference
     */
    public function setAmountDifference(?int $amountDifference): void
    {
        $this->amountDifference['value'] = $amountDifference;
    }

    /**
     * Unsets Amount Difference.
     * Difference between paid and expected amount (positive = over, negative = under).
     */
    public function unsetAmountDifference(): void
    {
        $this->amountDifference = [];
    }

    /**
     * Returns Token Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getTokenMetadata(): ?GenericMetadata
    {
        return $this->tokenMetadata;
    }

    /**
     * Sets Token Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps token_metadata
     */
    public function setTokenMetadata(?GenericMetadata $tokenMetadata): void
    {
        $this->tokenMetadata = $tokenMetadata;
    }

    /**
     * Returns Charge Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getChargeMetadata(): ?GenericMetadata
    {
        return $this->chargeMetadata;
    }

    /**
     * Sets Charge Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps charge_metadata
     */
    public function setChargeMetadata(?GenericMetadata $chargeMetadata): void
    {
        $this->chargeMetadata = $chargeMetadata;
    }

    /**
     * Converts the BankTransferStatusData object to a human-readable string representation.
     *
     * @return string The string representation of the BankTransferStatusData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankTransferStatusData',
            [
                'id' => $this->getId(),
                'chargeId' => $this->chargeId,
                'paymentStatus' => $this->paymentStatus,
                'latestDepositDate' => $this->getLatestDepositDate(),
                'createdOn' => $this->getCreatedOn(),
                'latestDepositAmount' => $this->getLatestDepositAmount(),
                'balance' => $this->getBalance(),
                'currency' => $this->currency,
                'amount' => $this->amount,
                'amountDifference' => $this->getAmountDifference(),
                'tokenMetadata' => $this->tokenMetadata,
                'chargeMetadata' => $this->chargeMetadata,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'charge_id',
        'payment_status',
        'latest_deposit_date',
        'created_on',
        'latest_deposit_amount',
        'balance',
        'currency',
        'amount',
        'amount_difference',
        'token_metadata',
        'charge_metadata'
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
        if (!empty($this->id)) {
            $json['id']                    = $this->id['value'];
        }
        if (isset($this->chargeId)) {
            $json['charge_id']             = $this->chargeId;
        }
        if (isset($this->paymentStatus)) {
            $json['payment_status']        = BankTransferPaymentStatus::checkValue($this->paymentStatus);
        }
        if (!empty($this->latestDepositDate)) {
            $json['latest_deposit_date']   = DateTimeHelper::toRfc3339DateTime($this->latestDepositDate['value']);
        }
        if (!empty($this->createdOn)) {
            $json['created_on']            = DateTimeHelper::toRfc3339DateTime($this->createdOn['value']);
        }
        if (!empty($this->latestDepositAmount)) {
            $json['latest_deposit_amount'] = $this->latestDepositAmount['value'];
        }
        if (!empty($this->balance)) {
            $json['balance']               = $this->balance['value'];
        }
        if (isset($this->currency)) {
            $json['currency']              = $this->currency;
        }
        if (isset($this->amount)) {
            $json['amount']                = $this->amount;
        }
        if (!empty($this->amountDifference)) {
            $json['amount_difference']     = $this->amountDifference['value'];
        }
        if (isset($this->tokenMetadata)) {
            $json['token_metadata']        = $this->tokenMetadata;
        }
        if (isset($this->chargeMetadata)) {
            $json['charge_metadata']       = $this->chargeMetadata;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
