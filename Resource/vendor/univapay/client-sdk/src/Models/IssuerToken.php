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
 * Issuer token or bank transfer instruction payload.
 */
class IssuerToken implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var array
     */
    private $issuerToken = [];

    /**
     * @var array
     */
    private $callMethod = [];

    /**
     * @var array
     */
    private $payload = [];

    /**
     * @var array
     */
    private $accountId = [];

    /**
     * @var array
     */
    private $branchCode = [];

    /**
     * @var array
     */
    private $branchName = [];

    /**
     * @var array
     */
    private $accountHolderName = [];

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @param string $paymentType
     */
    public function __construct(string $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Payment Type.
     * The type of payment method for the charge.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * The type of payment method for the charge.
     *
     * @required
     * @maps payment_type
     * @factory \UnivaPay\Models\IssuerTokenPaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Issuer Token.
     * (Online) The token or payment URL provided by the payment provider for the consumer to execute.
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
     * (Online) The token or payment URL provided by the payment provider for the consumer to execute.
     *
     * @maps issuer_token
     */
    public function setIssuerToken(?string $issuerToken): void
    {
        $this->issuerToken['value'] = $issuerToken;
    }

    /**
     * Unsets Issuer Token.
     * (Online) The token or payment URL provided by the payment provider for the consumer to execute.
     */
    public function unsetIssuerToken(): void
    {
        $this->issuerToken = [];
    }

    /**
     * Returns Call Method.
     * (Online) How the client should execute the token.  - `sdk` / `app`: Direct use in native app
     * environments/SDKs. - `web`: Direct use in special extended browser environments. - `http_get` /
     * `http_post`: Execute directly in a new browser window or iframe.
     */
    public function getCallMethod(): ?string
    {
        if (count($this->callMethod) == 0) {
            return null;
        }
        return $this->callMethod['value'];
    }

    /**
     * Sets Call Method.
     * (Online) How the client should execute the token.  - `sdk` / `app`: Direct use in native app
     * environments/SDKs. - `web`: Direct use in special extended browser environments. - `http_get` /
     * `http_post`: Execute directly in a new browser window or iframe.
     *
     * @maps call_method
     * @factory \UnivaPay\Models\IssuerTokenCallMethod::checkValue
     */
    public function setCallMethod(?string $callMethod): void
    {
        $this->callMethod['value'] = $callMethod;
    }

    /**
     * Unsets Call Method.
     * (Online) How the client should execute the token.  - `sdk` / `app`: Direct use in native app
     * environments/SDKs. - `web`: Direct use in special extended browser environments. - `http_get` /
     * `http_post`: Execute directly in a new browser window or iframe.
     */
    public function unsetCallMethod(): void
    {
        $this->callMethod = [];
    }

    /**
     * Returns Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     */
    public function getPayload(): ?IssuerTokenPayload
    {
        if (count($this->payload) == 0) {
            return null;
        }
        return $this->payload['value'];
    }

    /**
     * Sets Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     *
     * @maps payload
     */
    public function setPayload(?IssuerTokenPayload $payload): void
    {
        $this->payload['value'] = $payload;
    }

    /**
     * Unsets Payload.
     * Key-value pairs required to complete the payment action, or null if not applicable. Used when
     * `call_method` is `http_post`. When present, this JSON must be converted by the client to match the
     * expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string)
     * before sending the POST request.
     */
    public function unsetPayload(): void
    {
        $this->payload = [];
    }

    /**
     * Returns Account Id.
     * (Bank Transfer) Unique ID of the bank account issued by the connected system.
     */
    public function getAccountId(): ?string
    {
        if (count($this->accountId) == 0) {
            return null;
        }
        return $this->accountId['value'];
    }

    /**
     * Sets Account Id.
     * (Bank Transfer) Unique ID of the bank account issued by the connected system.
     *
     * @maps account_id
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId['value'] = $accountId;
    }

    /**
     * Unsets Account Id.
     * (Bank Transfer) Unique ID of the bank account issued by the connected system.
     */
    public function unsetAccountId(): void
    {
        $this->accountId = [];
    }

    /**
     * Returns Branch Code.
     * (Bank Transfer) Branch code.
     */
    public function getBranchCode(): ?string
    {
        if (count($this->branchCode) == 0) {
            return null;
        }
        return $this->branchCode['value'];
    }

    /**
     * Sets Branch Code.
     * (Bank Transfer) Branch code.
     *
     * @maps branch_code
     */
    public function setBranchCode(?string $branchCode): void
    {
        $this->branchCode['value'] = $branchCode;
    }

    /**
     * Unsets Branch Code.
     * (Bank Transfer) Branch code.
     */
    public function unsetBranchCode(): void
    {
        $this->branchCode = [];
    }

    /**
     * Returns Branch Name.
     * (Bank Transfer) Branch name.
     */
    public function getBranchName(): ?string
    {
        if (count($this->branchName) == 0) {
            return null;
        }
        return $this->branchName['value'];
    }

    /**
     * Sets Branch Name.
     * (Bank Transfer) Branch name.
     *
     * @maps branch_name
     */
    public function setBranchName(?string $branchName): void
    {
        $this->branchName['value'] = $branchName;
    }

    /**
     * Unsets Branch Name.
     * (Bank Transfer) Branch name.
     */
    public function unsetBranchName(): void
    {
        $this->branchName = [];
    }

    /**
     * Returns Account Holder Name.
     * (Bank Transfer) Account holder name.
     */
    public function getAccountHolderName(): ?string
    {
        if (count($this->accountHolderName) == 0) {
            return null;
        }
        return $this->accountHolderName['value'];
    }

    /**
     * Sets Account Holder Name.
     * (Bank Transfer) Account holder name.
     *
     * @maps account_holder_name
     */
    public function setAccountHolderName(?string $accountHolderName): void
    {
        $this->accountHolderName['value'] = $accountHolderName;
    }

    /**
     * Unsets Account Holder Name.
     * (Bank Transfer) Account holder name.
     */
    public function unsetAccountHolderName(): void
    {
        $this->accountHolderName = [];
    }

    /**
     * Returns Account Number.
     * (Bank Transfer) Account number.
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * (Bank Transfer) Account number.
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * (Bank Transfer) Account number.
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Converts the IssuerToken object to a human-readable string representation.
     *
     * @return string The string representation of the IssuerToken object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'IssuerToken',
            [
                'paymentType' => $this->paymentType,
                'issuerToken' => $this->getIssuerToken(),
                'callMethod' => $this->getCallMethod(),
                'payload' => $this->getPayload(),
                'accountId' => $this->getAccountId(),
                'branchCode' => $this->getBranchCode(),
                'branchName' => $this->getBranchName(),
                'accountHolderName' => $this->getAccountHolderName(),
                'accountNumber' => $this->getAccountNumber(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'payment_type',
        'issuer_token',
        'call_method',
        'payload',
        'account_id',
        'branch_code',
        'branch_name',
        'account_holder_name',
        'account_number'
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
        $json['payment_type']            = IssuerTokenPaymentType::checkValue($this->paymentType);
        if (!empty($this->issuerToken)) {
            $json['issuer_token']        = $this->issuerToken['value'];
        }
        if (!empty($this->callMethod)) {
            $json['call_method']         = IssuerTokenCallMethod::checkValue($this->callMethod['value']);
        }
        if (!empty($this->payload)) {
            $json['payload']             = $this->payload['value'];
        }
        if (!empty($this->accountId)) {
            $json['account_id']          = $this->accountId['value'];
        }
        if (!empty($this->branchCode)) {
            $json['branch_code']         = $this->branchCode['value'];
        }
        if (!empty($this->branchName)) {
            $json['branch_name']         = $this->branchName['value'];
        }
        if (!empty($this->accountHolderName)) {
            $json['account_holder_name'] = $this->accountHolderName['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['account_number']      = $this->accountNumber['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
