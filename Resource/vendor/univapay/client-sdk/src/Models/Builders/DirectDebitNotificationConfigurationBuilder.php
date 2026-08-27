<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitNotificationConfiguration;

/**
 * Builder for model DirectDebitNotificationConfiguration
 *
 * @see DirectDebitNotificationConfiguration
 */
class DirectDebitNotificationConfigurationBuilder
{
    /**
     * @var DirectDebitNotificationConfiguration
     */
    private $instance;

    private function __construct(DirectDebitNotificationConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Notification Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitNotificationConfiguration());
    }

    /**
     * Sets notify deadline mailing field.
     *
     * @param bool|null $value
     */
    public function notifyDeadlineMailing(?bool $value): self
    {
        $this->instance->setNotifyDeadlineMailing($value);
        return $this;
    }

    /**
     * Sets notify deadline debit field.
     *
     * @param bool|null $value
     */
    public function notifyDeadlineDebit(?bool $value): self
    {
        $this->instance->setNotifyDeadlineDebit($value);
        return $this;
    }

    /**
     * Sets notify debit update field.
     *
     * @param bool|null $value
     */
    public function notifyDebitUpdate(?bool $value): self
    {
        $this->instance->setNotifyDebitUpdate($value);
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
     * Initializes a new Direct Debit Notification Configuration object.
     */
    public function build(): DirectDebitNotificationConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
