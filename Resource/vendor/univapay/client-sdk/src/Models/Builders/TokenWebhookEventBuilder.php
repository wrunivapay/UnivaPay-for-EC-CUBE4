<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BankTransferTransactionToken;
use UnivaPay\Models\CardTransactionToken;
use UnivaPay\Models\KonbiniTransactionToken;
use UnivaPay\Models\OnlineTransactionToken;
use UnivaPay\Models\PaidyTransactionToken;
use UnivaPay\Models\QrMerchantTransactionToken;
use UnivaPay\Models\QrScanTransactionToken;
use UnivaPay\Models\TokenWebhookEvent;

/**
 * Builder for model TokenWebhookEvent
 *
 * @see TokenWebhookEvent
 */
class TokenWebhookEventBuilder
{
    /**
     * @var TokenWebhookEvent
     */
    private $instance;

    private function __construct(TokenWebhookEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Webhook Event Builder object.
     *
     * @param string $id
     * @param string $event
     * @param \DateTime $createdOn
     */
    public static function init(string $id, string $event, \DateTime $createdOn): self
    {
        return new self(new TokenWebhookEvent($id, $event, $createdOn));
    }

    /**
     * Sets data field.
     *
     * @param CardTransactionToken|KonbiniTransactionToken|OnlineTransactionToken|BankTransferTransactionToken|PaidyTransactionToken|QrScanTransactionToken|QrMerchantTransactionToken|null $value
     */
    public function data($value): self
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
     * Initializes a new Token Webhook Event object.
     */
    public function build(): TokenWebhookEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
