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
 * Request payload for creating a charge.
 */
class ChargeCreateRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionTokenId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var bool|null
     */
    private $capture = true;

    /**
     * @var \DateTime|null
     */
    private $captureAt;

    /**
     * @var string|null
     */
    private $merchantTransactionId;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var ChargeCreateRequestClientMetadata|null
     */
    private $clientMetadata;

    /**
     * @var ChargeCreateRequestRedirect|null
     */
    private $redirect;

    /**
     * @var ChargeCreateRequestThreeDs|null
     */
    private $threeDs;

    /**
     * @param string $transactionTokenId
     * @param int $amount
     * @param string $currency
     */
    public function __construct(string $transactionTokenId, int $amount, string $currency)
    {
        $this->transactionTokenId = $transactionTokenId;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Returns Transaction Token Id.
     * Transaction token identifier.
     */
    public function getTransactionTokenId(): string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token identifier.
     *
     * @required
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Amount.
     * The charge amount.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The charge amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Capture.
     * If false, creates an Authorization only (Hold).
     */
    public function getCapture(): ?bool
    {
        return $this->capture;
    }

    /**
     * Sets Capture.
     * If false, creates an Authorization only (Hold).
     *
     * @maps capture
     */
    public function setCapture(?bool $capture): void
    {
        $this->capture = $capture;
    }

    /**
     * Returns Capture At.
     * Auto-capture date for cards, or payment deadline for Konbini/Bank. Note: Time specification is
     * ignored for 7-Eleven, Seicomart, and PayEasy.
     */
    public function getCaptureAt(): ?\DateTime
    {
        return $this->captureAt;
    }

    /**
     * Sets Capture At.
     * Auto-capture date for cards, or payment deadline for Konbini/Bank. Note: Time specification is
     * ignored for 7-Eleven, Seicomart, and PayEasy.
     *
     * @maps capture_at
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCaptureAt(?\DateTime $captureAt): void
    {
        $this->captureAt = $captureAt;
    }

    /**
     * Returns Merchant Transaction Id.
     * Unique transaction ID for the merchant.  Required/used by specific brands like we_chat, we_chat_mpm,
     * and we_chat_online.
     */
    public function getMerchantTransactionId(): ?string
    {
        return $this->merchantTransactionId;
    }

    /**
     * Sets Merchant Transaction Id.
     * Unique transaction ID for the merchant.  Required/used by specific brands like we_chat, we_chat_mpm,
     * and we_chat_online.
     *
     * @maps merchant_transaction_id
     */
    public function setMerchantTransactionId(?string $merchantTransactionId): void
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }

    /**
     * Returns Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getMetadata(): ?GenericMetadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?GenericMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Client Metadata.
     * Charge Create Request Client Metadata schema.
     */
    public function getClientMetadata(): ?ChargeCreateRequestClientMetadata
    {
        return $this->clientMetadata;
    }

    /**
     * Sets Client Metadata.
     * Charge Create Request Client Metadata schema.
     *
     * @maps client_metadata
     */
    public function setClientMetadata(?ChargeCreateRequestClientMetadata $clientMetadata): void
    {
        $this->clientMetadata = $clientMetadata;
    }

    /**
     * Returns Redirect.
     * Charge Create Request Redirect schema.
     */
    public function getRedirect(): ?ChargeCreateRequestRedirect
    {
        return $this->redirect;
    }

    /**
     * Sets Redirect.
     * Charge Create Request Redirect schema.
     *
     * @maps redirect
     */
    public function setRedirect(?ChargeCreateRequestRedirect $redirect): void
    {
        $this->redirect = $redirect;
    }

    /**
     * Returns Three Ds.
     * Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to
     * have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through
     * `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that
     * case `mode` is set to `provided` automatically and must not be sent.
     */
    public function getThreeDs(): ?ChargeCreateRequestThreeDs
    {
        return $this->threeDs;
    }

    /**
     * Sets Three Ds.
     * Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to
     * have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through
     * `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that
     * case `mode` is set to `provided` automatically and must not be sent.
     *
     * @maps three_ds
     */
    public function setThreeDs(?ChargeCreateRequestThreeDs $threeDs): void
    {
        $this->threeDs = $threeDs;
    }

    /**
     * Converts the ChargeCreateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeCreateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeCreateRequest',
            [
                'transactionTokenId' => $this->transactionTokenId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'capture' => $this->capture,
                'captureAt' => $this->captureAt,
                'merchantTransactionId' => $this->merchantTransactionId,
                'metadata' => $this->metadata,
                'clientMetadata' => $this->clientMetadata,
                'redirect' => $this->redirect,
                'threeDs' => $this->threeDs,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'transaction_token_id',
        'amount',
        'currency',
        'capture',
        'capture_at',
        'merchant_transaction_id',
        'metadata',
        'client_metadata',
        'redirect',
        'three_ds'
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
        $json['transaction_token_id']        = $this->transactionTokenId;
        $json['amount']                      = $this->amount;
        $json['currency']                    = $this->currency;
        if (isset($this->capture)) {
            $json['capture']                 = $this->capture;
        }
        if (isset($this->captureAt)) {
            $json['capture_at']              = DateTimeHelper::toRfc3339DateTime($this->captureAt);
        }
        if (isset($this->merchantTransactionId)) {
            $json['merchant_transaction_id'] = $this->merchantTransactionId;
        }
        if (isset($this->metadata)) {
            $json['metadata']                = $this->metadata;
        }
        if (isset($this->clientMetadata)) {
            $json['client_metadata']         = $this->clientMetadata;
        }
        if (isset($this->redirect)) {
            $json['redirect']                = $this->redirect;
        }
        if (isset($this->threeDs)) {
            $json['three_ds']                = $this->threeDs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
