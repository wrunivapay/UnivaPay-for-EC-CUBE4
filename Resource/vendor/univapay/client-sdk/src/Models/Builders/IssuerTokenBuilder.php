<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\IssuerToken;
use UnivaPay\Models\IssuerTokenPayload;

/**
 * Builder for model IssuerToken
 *
 * @see IssuerToken
 */
class IssuerTokenBuilder
{
    /**
     * @var IssuerToken
     */
    private $instance;

    private function __construct(IssuerToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Issuer Token Builder object.
     *
     * @param string $paymentType
     */
    public static function init(string $paymentType): self
    {
        return new self(new IssuerToken($paymentType));
    }

    /**
     * Sets issuer token field.
     *
     * @param string|null $value
     */
    public function issuerToken(?string $value): self
    {
        $this->instance->setIssuerToken($value);
        return $this;
    }

    /**
     * Unsets issuer token field.
     */
    public function unsetIssuerToken(): self
    {
        $this->instance->unsetIssuerToken();
        return $this;
    }

    /**
     * Sets call method field.
     *
     * @param string|null $value
     */
    public function callMethod(?string $value): self
    {
        $this->instance->setCallMethod($value);
        return $this;
    }

    /**
     * Unsets call method field.
     */
    public function unsetCallMethod(): self
    {
        $this->instance->unsetCallMethod();
        return $this;
    }

    /**
     * Sets payload field.
     *
     * @param IssuerTokenPayload|null $value
     */
    public function payload(?IssuerTokenPayload $value): self
    {
        $this->instance->setPayload($value);
        return $this;
    }

    /**
     * Unsets payload field.
     */
    public function unsetPayload(): self
    {
        $this->instance->unsetPayload();
        return $this;
    }

    /**
     * Sets account id field.
     *
     * @param string|null $value
     */
    public function accountId(?string $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Unsets account id field.
     */
    public function unsetAccountId(): self
    {
        $this->instance->unsetAccountId();
        return $this;
    }

    /**
     * Sets branch code field.
     *
     * @param string|null $value
     */
    public function branchCode(?string $value): self
    {
        $this->instance->setBranchCode($value);
        return $this;
    }

    /**
     * Unsets branch code field.
     */
    public function unsetBranchCode(): self
    {
        $this->instance->unsetBranchCode();
        return $this;
    }

    /**
     * Sets branch name field.
     *
     * @param string|null $value
     */
    public function branchName(?string $value): self
    {
        $this->instance->setBranchName($value);
        return $this;
    }

    /**
     * Unsets branch name field.
     */
    public function unsetBranchName(): self
    {
        $this->instance->unsetBranchName();
        return $this;
    }

    /**
     * Sets account holder name field.
     *
     * @param string|null $value
     */
    public function accountHolderName(?string $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Unsets account holder name field.
     */
    public function unsetAccountHolderName(): self
    {
        $this->instance->unsetAccountHolderName();
        return $this;
    }

    /**
     * Sets account number field.
     *
     * @param string|null $value
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Issuer Token object.
     */
    public function build(): IssuerToken
    {
        return CoreHelper::clone($this->instance);
    }
}
