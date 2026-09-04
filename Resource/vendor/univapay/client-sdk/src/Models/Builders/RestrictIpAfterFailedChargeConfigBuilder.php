<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\RestrictIpAfterFailedChargeConfig;

/**
 * Builder for model RestrictIpAfterFailedChargeConfig
 *
 * @see RestrictIpAfterFailedChargeConfig
 */
class RestrictIpAfterFailedChargeConfigBuilder
{
    /**
     * @var RestrictIpAfterFailedChargeConfig
     */
    private $instance;

    private function __construct(RestrictIpAfterFailedChargeConfig $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Restrict Ip After Failed Charge Config Builder object.
     */
    public static function init(): self
    {
        return new self(new RestrictIpAfterFailedChargeConfig());
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
     * Sets count field.
     *
     * @param int|null $value
     */
    public function count(?int $value): self
    {
        $this->instance->setCount($value);
        return $this;
    }

    /**
     * Unsets count field.
     */
    public function unsetCount(): self
    {
        $this->instance->unsetCount();
        return $this;
    }

    /**
     * Sets cooldown field.
     *
     * @param string|null $value
     */
    public function cooldown(?string $value): self
    {
        $this->instance->setCooldown($value);
        return $this;
    }

    /**
     * Unsets cooldown field.
     */
    public function unsetCooldown(): self
    {
        $this->instance->unsetCooldown();
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
     * Initializes a new Restrict Ip After Failed Charge Config object.
     */
    public function build(): RestrictIpAfterFailedChargeConfig
    {
        return CoreHelper::clone($this->instance);
    }
}
