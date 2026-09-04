<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookSubscriptionConfiguration;

/**
 * Builder for model MerchantWebhookSubscriptionConfiguration
 *
 * @see MerchantWebhookSubscriptionConfiguration
 */
class MerchantWebhookSubscriptionConfigurationBuilder
{
    /**
     * @var MerchantWebhookSubscriptionConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookSubscriptionConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Subscription Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookSubscriptionConfiguration());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Unsets enabled field.
     */
    public function unsetEnabled(): self
    {
        $this->instance->unsetEnabled();
        return $this;
    }

    /**
     * Sets failed charges to cancel field.
     *
     * @param int|null $value
     */
    public function failedChargesToCancel(?int $value): self
    {
        $this->instance->setFailedChargesToCancel($value);
        return $this;
    }

    /**
     * Unsets failed charges to cancel field.
     */
    public function unsetFailedChargesToCancel(): self
    {
        $this->instance->unsetFailedChargesToCancel();
        return $this;
    }

    /**
     * Sets suspend on cancel field.
     *
     * @param bool|null $value
     */
    public function suspendOnCancel(?bool $value): self
    {
        $this->instance->setSuspendOnCancel($value);
        return $this;
    }

    /**
     * Unsets suspend on cancel field.
     */
    public function unsetSuspendOnCancel(): self
    {
        $this->instance->unsetSuspendOnCancel();
        return $this;
    }

    /**
     * Sets allow merchant amount patch field.
     *
     * @param bool|null $value
     */
    public function allowMerchantAmountPatch(?bool $value): self
    {
        $this->instance->setAllowMerchantAmountPatch($value);
        return $this;
    }

    /**
     * Unsets allow merchant amount patch field.
     */
    public function unsetAllowMerchantAmountPatch(): self
    {
        $this->instance->unsetAllowMerchantAmountPatch();
        return $this;
    }

    /**
     * Sets allow merchant due date patch field.
     *
     * @param bool|null $value
     */
    public function allowMerchantDueDatePatch(?bool $value): self
    {
        $this->instance->setAllowMerchantDueDatePatch($value);
        return $this;
    }

    /**
     * Unsets allow merchant due date patch field.
     */
    public function unsetAllowMerchantDueDatePatch(): self
    {
        $this->instance->unsetAllowMerchantDueDatePatch();
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
     * Initializes a new Merchant Webhook Subscription Configuration object.
     */
    public function build(): MerchantWebhookSubscriptionConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
