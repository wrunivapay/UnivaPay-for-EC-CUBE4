<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BankTransferStatusData;
use UnivaPay\Models\BankTransferStatusWebhookCallback;

/**
 * Builder for model BankTransferStatusWebhookCallback
 *
 * @see BankTransferStatusWebhookCallback
 */
class BankTransferStatusWebhookCallbackBuilder
{
    /**
     * @var BankTransferStatusWebhookCallback
     */
    private $instance;

    private function __construct(BankTransferStatusWebhookCallback $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Transfer Status Webhook Callback Builder object.
     *
     * @param string $id
     * @param \DateTime $createdOn
     */
    public static function init(string $id, \DateTime $createdOn): self
    {
        return new self(new BankTransferStatusWebhookCallback($id, $createdOn));
    }

    /**
     * Sets event field.
     *
     * @param string|null $value
     */
    public function event(?string $value): self
    {
        $this->instance->setEvent($value);
        return $this;
    }

    /**
     * Sets data field.
     *
     * @param BankTransferStatusData|null $value
     */
    public function data(?BankTransferStatusData $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new Bank Transfer Status Webhook Callback object.
     */
    public function build(): BankTransferStatusWebhookCallback
    {
        return CoreHelper::clone($this->instance);
    }
}
