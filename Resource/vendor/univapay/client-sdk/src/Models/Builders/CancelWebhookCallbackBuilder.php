<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Cancel;
use UnivaPay\Models\CancelWebhookCallback;

/**
 * Builder for model CancelWebhookCallback
 *
 * @see CancelWebhookCallback
 */
class CancelWebhookCallbackBuilder
{
    /**
     * @var CancelWebhookCallback
     */
    private $instance;

    private function __construct(CancelWebhookCallback $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancel Webhook Callback Builder object.
     *
     * @param string $id
     * @param \DateTime $createdOn
     */
    public static function init(string $id, \DateTime $createdOn): self
    {
        return new self(new CancelWebhookCallback($id, $createdOn));
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
     * @param Cancel|null $value
     */
    public function data(?Cancel $value): self
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
     * Initializes a new Cancel Webhook Callback object.
     */
    public function build(): CancelWebhookCallback
    {
        return CoreHelper::clone($this->instance);
    }
}
