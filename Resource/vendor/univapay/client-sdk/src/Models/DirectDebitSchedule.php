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
 * The key dates for one debit cycle. Use these to work out whether the current month's registration
 * window is still open.
 */
class DirectDebitSchedule implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $merchantBankAccountTransferDate;

    /**
     * @var \DateTime|null
     */
    private $merchantBankAccountRegistrationDeadline;

    /**
     * @var \DateTime|null
     */
    private $merchantBankTransferUploadDeadline;

    /**
     * @var \DateTime|null
     */
    private $platformResultRegistrationDate;

    /**
     * @var \DateTime|null
     */
    private $platformScheduledPayout;

    /**
     * Returns Merchant Bank Account Transfer Date.
     * The date funds are pulled from consumer accounts (指定振替日).
     */
    public function getMerchantBankAccountTransferDate(): ?\DateTime
    {
        return $this->merchantBankAccountTransferDate;
    }

    /**
     * Sets Merchant Bank Account Transfer Date.
     * The date funds are pulled from consumer accounts (指定振替日).
     *
     * @maps merchant_bank_account_transfer_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setMerchantBankAccountTransferDate(?\DateTime $merchantBankAccountTransferDate): void
    {
        $this->merchantBankAccountTransferDate = $merchantBankAccountTransferDate;
    }

    /**
     * Returns Merchant Bank Account Registration Deadline.
     * The date by which the bank must receive the signed direct debit mandate (振替依頼書到着期限).
     */
    public function getMerchantBankAccountRegistrationDeadline(): ?\DateTime
    {
        return $this->merchantBankAccountRegistrationDeadline;
    }

    /**
     * Sets Merchant Bank Account Registration Deadline.
     * The date by which the bank must receive the signed direct debit mandate (振替依頼書到着期限).
     *
     * @maps merchant_bank_account_registration_deadline
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setMerchantBankAccountRegistrationDeadline(
        ?\DateTime $merchantBankAccountRegistrationDeadline
    ): void {
        $this->merchantBankAccountRegistrationDeadline = $merchantBankAccountRegistrationDeadline;
    }

    /**
     * Returns Merchant Bank Transfer Upload Deadline.
     * The last date transfers can be registered or edited for this cycle (振替データアップロード期限). After this,
     * transfers lock.
     */
    public function getMerchantBankTransferUploadDeadline(): ?\DateTime
    {
        return $this->merchantBankTransferUploadDeadline;
    }

    /**
     * Sets Merchant Bank Transfer Upload Deadline.
     * The last date transfers can be registered or edited for this cycle (振替データアップロード期限). After this,
     * transfers lock.
     *
     * @maps merchant_bank_transfer_upload_deadline
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setMerchantBankTransferUploadDeadline(?\DateTime $merchantBankTransferUploadDeadline): void
    {
        $this->merchantBankTransferUploadDeadline = $merchantBankTransferUploadDeadline;
    }

    /**
     * Returns Platform Result Registration Date.
     * The date transfer results are reflected on the platform (振替結果反映日).
     */
    public function getPlatformResultRegistrationDate(): ?\DateTime
    {
        return $this->platformResultRegistrationDate;
    }

    /**
     * Sets Platform Result Registration Date.
     * The date transfer results are reflected on the platform (振替結果反映日).
     *
     * @maps platform_result_registration_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setPlatformResultRegistrationDate(?\DateTime $platformResultRegistrationDate): void
    {
        $this->platformResultRegistrationDate = $platformResultRegistrationDate;
    }

    /**
     * Returns Platform Scheduled Payout.
     * The date collected funds are paid out to the merchant (支払日).
     */
    public function getPlatformScheduledPayout(): ?\DateTime
    {
        return $this->platformScheduledPayout;
    }

    /**
     * Sets Platform Scheduled Payout.
     * The date collected funds are paid out to the merchant (支払日).
     *
     * @maps platform_scheduled_payout
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setPlatformScheduledPayout(?\DateTime $platformScheduledPayout): void
    {
        $this->platformScheduledPayout = $platformScheduledPayout;
    }

    /**
     * Converts the DirectDebitSchedule object to a human-readable string representation.
     *
     * @return string The string representation of the DirectDebitSchedule object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DirectDebitSchedule',
            [
                'merchantBankAccountTransferDate' => $this->merchantBankAccountTransferDate,
                'merchantBankAccountRegistrationDeadline' => $this->merchantBankAccountRegistrationDeadline,
                'merchantBankTransferUploadDeadline' => $this->merchantBankTransferUploadDeadline,
                'platformResultRegistrationDate' => $this->platformResultRegistrationDate,
                'platformScheduledPayout' => $this->platformScheduledPayout,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'merchant_bank_account_transfer_date',
        'merchant_bank_account_registration_deadline',
        'merchant_bank_transfer_upload_deadline',
        'platform_result_registration_date',
        'platform_scheduled_payout'
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
        if (isset($this->merchantBankAccountTransferDate)) {
            $json['merchant_bank_account_transfer_date']         =
                DateTimeHelper::toSimpleDate(
                    $this->merchantBankAccountTransferDate
                );
        }
        if (isset($this->merchantBankAccountRegistrationDeadline)) {
            $json['merchant_bank_account_registration_deadline'] =
                DateTimeHelper::toSimpleDate(
                    $this->merchantBankAccountRegistrationDeadline
                );
        }
        if (isset($this->merchantBankTransferUploadDeadline)) {
            $json['merchant_bank_transfer_upload_deadline']      =
                DateTimeHelper::toSimpleDate(
                    $this->merchantBankTransferUploadDeadline
                );
        }
        if (isset($this->platformResultRegistrationDate)) {
            $json['platform_result_registration_date']           =
                DateTimeHelper::toSimpleDate(
                    $this->platformResultRegistrationDate
                );
        }
        if (isset($this->platformScheduledPayout)) {
            $json['platform_scheduled_payout']                   =
                DateTimeHelper::toSimpleDate(
                    $this->platformScheduledPayout
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
