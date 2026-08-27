<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\WebhookCallbackEnvelope;

/**
 * Builder for model WebhookCallbackEnvelope
 *
 * @see WebhookCallbackEnvelope
 */
class WebhookCallbackEnvelopeBuilder
{
    /**
     * @var WebhookCallbackEnvelope
     */
    private $instance;

    private function __construct(WebhookCallbackEnvelope $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Callback Envelope Builder object.
     *
     * @param string $id
     * @param string $event
     * @param \DateTime $createdOn
     */
    public static function init(string $id, string $event, \DateTime $createdOn): self
    {
        return new self(new WebhookCallbackEnvelope($id, $event, $createdOn));
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
     * Initializes a new Webhook Callback Envelope object.
     */
    public function build(): WebhookCallbackEnvelope
    {
        return CoreHelper::clone($this->instance);
    }
}
