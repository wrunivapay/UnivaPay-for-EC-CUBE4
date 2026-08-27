<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookResult;

/**
 * Builder for model CustomsDeclarationWebhookResult
 *
 * @see CustomsDeclarationWebhookResult
 */
class CustomsDeclarationWebhookResultBuilder
{
    /**
     * @var CustomsDeclarationWebhookResult
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Result Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookResult());
    }

    /**
     * Sets approving authority field.
     *
     * @param string|null $value
     */
    public function approvingAuthority(?string $value): self
    {
        $this->instance->setApprovingAuthority($value);
        return $this;
    }

    /**
     * Unsets approving authority field.
     */
    public function unsetApprovingAuthority(): self
    {
        $this->instance->unsetApprovingAuthority();
        return $this;
    }

    /**
     * Sets trade id field.
     *
     * @param string|null $value
     */
    public function tradeId(?string $value): self
    {
        $this->instance->setTradeId($value);
        return $this;
    }

    /**
     * Unsets trade id field.
     */
    public function unsetTradeId(): self
    {
        $this->instance->unsetTradeId();
        return $this;
    }

    /**
     * Sets transaction id field.
     *
     * @param string|null $value
     */
    public function transactionId(?string $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Unsets transaction id field.
     */
    public function unsetTransactionId(): self
    {
        $this->instance->unsetTransactionId();
        return $this;
    }

    /**
     * Sets charge transaction id field.
     *
     * @param string|null $value
     */
    public function chargeTransactionId(?string $value): self
    {
        $this->instance->setChargeTransactionId($value);
        return $this;
    }

    /**
     * Unsets charge transaction id field.
     */
    public function unsetChargeTransactionId(): self
    {
        $this->instance->unsetChargeTransactionId();
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
     * Initializes a new Customs Declaration Webhook Result object.
     */
    public function build(): CustomsDeclarationWebhookResult
    {
        return CoreHelper::clone($this->instance);
    }
}
