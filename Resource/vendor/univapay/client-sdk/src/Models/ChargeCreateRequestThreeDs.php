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
 * Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to
 * have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through
 * `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that
 * case `mode` is set to `provided` automatically and must not be sent.
 */
class ChargeCreateRequestThreeDs implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $redirectEndpoint;

    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var string|null
     */
    private $authenticationValue;

    /**
     * @var string|null
     */
    private $eci;

    /**
     * @var string|null
     */
    private $dsTransactionId;

    /**
     * @var string|null
     */
    private $serverTransactionId;

    /**
     * @var string|null
     */
    private $messageVersion;

    /**
     * @var string|null
     */
    private $transactionStatus;

    /**
     * Returns Redirect Endpoint.
     * URL to redirect the customer to after 3DS authentication.
     */
    public function getRedirectEndpoint(): ?string
    {
        return $this->redirectEndpoint;
    }

    /**
     * Sets Redirect Endpoint.
     * URL to redirect the customer to after 3DS authentication.
     *
     * @maps redirect_endpoint
     */
    public function setRedirectEndpoint(?string $redirectEndpoint): void
    {
        $this->redirectEndpoint = $redirectEndpoint;
    }

    /**
     * Returns Mode.
     * 3D-Secure authentication type. App Token Secret is required to use 'skip'. `if_available` enforces
     * 3DS only if credentials are available for the recurring token and it has not already completed 3DS.
     * `provided` is set automatically by the server when external MPI authentication data
     * (`authentication_value`, `eci`, etc.) is submitted on the request and cannot be set manually. When
     * omitted, the store's default 3DS policy applies — do not assume 'normal'.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * 3D-Secure authentication type. App Token Secret is required to use 'skip'. `if_available` enforces
     * 3DS only if credentials are available for the recurring token and it has not already completed 3DS.
     * `provided` is set automatically by the server when external MPI authentication data
     * (`authentication_value`, `eci`, etc.) is submitted on the request and cannot be set manually. When
     * omitted, the store's default 3DS policy applies — do not assume 'normal'.
     *
     * @maps mode
     * @factory \UnivaPay\Models\ChargeCreateRequestThreeDsMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Authentication Value.
     * External MPI: the cardholder authentication value (CAVV/AAV) returned by the 3-D Secure directory
     * server. Submit together with `eci`, `ds_transaction_id`, `server_transaction_id`, `message_version`,
     * and `transaction_status` to provide externally completed 3DS authentication data — either all six
     * fields must be present, or none of them.
     */
    public function getAuthenticationValue(): ?string
    {
        return $this->authenticationValue;
    }

    /**
     * Sets Authentication Value.
     * External MPI: the cardholder authentication value (CAVV/AAV) returned by the 3-D Secure directory
     * server. Submit together with `eci`, `ds_transaction_id`, `server_transaction_id`, `message_version`,
     * and `transaction_status` to provide externally completed 3DS authentication data — either all six
     * fields must be present, or none of them.
     *
     * @maps authentication_value
     */
    public function setAuthenticationValue(?string $authenticationValue): void
    {
        $this->authenticationValue = $authenticationValue;
    }

    /**
     * Returns Eci.
     * External MPI: the two-digit Electronic Commerce Indicator returned by the directory server. Submit
     * together with the other external MPI fields.
     */
    public function getEci(): ?string
    {
        return $this->eci;
    }

    /**
     * Sets Eci.
     * External MPI: the two-digit Electronic Commerce Indicator returned by the directory server. Submit
     * together with the other external MPI fields.
     *
     * @maps eci
     */
    public function setEci(?string $eci): void
    {
        $this->eci = $eci;
    }

    /**
     * Returns Ds Transaction Id.
     * External MPI: the directory server transaction ID. Submit together with the other external MPI
     * fields.
     */
    public function getDsTransactionId(): ?string
    {
        return $this->dsTransactionId;
    }

    /**
     * Sets Ds Transaction Id.
     * External MPI: the directory server transaction ID. Submit together with the other external MPI
     * fields.
     *
     * @maps ds_transaction_id
     */
    public function setDsTransactionId(?string $dsTransactionId): void
    {
        $this->dsTransactionId = $dsTransactionId;
    }

    /**
     * Returns Server Transaction Id.
     * External MPI: the 3DS server transaction ID. Submit together with the other external MPI fields.
     */
    public function getServerTransactionId(): ?string
    {
        return $this->serverTransactionId;
    }

    /**
     * Sets Server Transaction Id.
     * External MPI: the 3DS server transaction ID. Submit together with the other external MPI fields.
     *
     * @maps server_transaction_id
     */
    public function setServerTransactionId(?string $serverTransactionId): void
    {
        $this->serverTransactionId = $serverTransactionId;
    }

    /**
     * Returns Message Version.
     * External MPI: the 3-D Secure protocol message version (e.g., '2.1.0', '2.2.0'). Submit together with
     * the other external MPI fields.
     */
    public function getMessageVersion(): ?string
    {
        return $this->messageVersion;
    }

    /**
     * Sets Message Version.
     * External MPI: the 3-D Secure protocol message version (e.g., '2.1.0', '2.2.0'). Submit together with
     * the other external MPI fields.
     *
     * @maps message_version
     */
    public function setMessageVersion(?string $messageVersion): void
    {
        $this->messageVersion = $messageVersion;
    }

    /**
     * Returns Transaction Status.
     * External MPI: the 3-D Secure directory server transaction status. Only a successful authentication
     * status is accepted. Submit together with the other external MPI fields.
     */
    public function getTransactionStatus(): ?string
    {
        return $this->transactionStatus;
    }

    /**
     * Sets Transaction Status.
     * External MPI: the 3-D Secure directory server transaction status. Only a successful authentication
     * status is accepted. Submit together with the other external MPI fields.
     *
     * @maps transaction_status
     */
    public function setTransactionStatus(?string $transactionStatus): void
    {
        $this->transactionStatus = $transactionStatus;
    }

    /**
     * Converts the ChargeCreateRequestThreeDs object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeCreateRequestThreeDs object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeCreateRequestThreeDs',
            [
                'redirectEndpoint' => $this->redirectEndpoint,
                'mode' => $this->mode,
                'authenticationValue' => $this->authenticationValue,
                'eci' => $this->eci,
                'dsTransactionId' => $this->dsTransactionId,
                'serverTransactionId' => $this->serverTransactionId,
                'messageVersion' => $this->messageVersion,
                'transactionStatus' => $this->transactionStatus,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'redirect_endpoint',
        'mode',
        'authentication_value',
        'eci',
        'ds_transaction_id',
        'server_transaction_id',
        'message_version',
        'transaction_status'
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
        if (isset($this->redirectEndpoint)) {
            $json['redirect_endpoint']     = $this->redirectEndpoint;
        }
        if (isset($this->mode)) {
            $json['mode']                  = ChargeCreateRequestThreeDsMode::checkValue($this->mode);
        }
        if (isset($this->authenticationValue)) {
            $json['authentication_value']  = $this->authenticationValue;
        }
        if (isset($this->eci)) {
            $json['eci']                   = $this->eci;
        }
        if (isset($this->dsTransactionId)) {
            $json['ds_transaction_id']     = $this->dsTransactionId;
        }
        if (isset($this->serverTransactionId)) {
            $json['server_transaction_id'] = $this->serverTransactionId;
        }
        if (isset($this->messageVersion)) {
            $json['message_version']       = $this->messageVersion;
        }
        if (isset($this->transactionStatus)) {
            $json['transaction_status']    = $this->transactionStatus;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
