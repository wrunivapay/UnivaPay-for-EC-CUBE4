<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookTransferScheduleConfiguration;

/**
 * Builder for model MerchantWebhookTransferScheduleConfiguration
 *
 * @see MerchantWebhookTransferScheduleConfiguration
 */
class MerchantWebhookTransferScheduleConfigurationBuilder
{
    /**
     * @var MerchantWebhookTransferScheduleConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookTransferScheduleConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Transfer Schedule Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookTransferScheduleConfiguration());
    }

    /**
     * Sets wait period field.
     *
     * @param string|null $value
     */
    public function waitPeriod(?string $value): self
    {
        $this->instance->setWaitPeriod($value);
        return $this;
    }

    /**
     * Sets period field.
     *
     * @param string|null $value
     */
    public function period(?string $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Sets full period required field.
     *
     * @param bool|null $value
     */
    public function fullPeriodRequired(?bool $value): self
    {
        $this->instance->setFullPeriodRequired($value);
        return $this;
    }

    /**
     * Unsets full period required field.
     */
    public function unsetFullPeriodRequired(): self
    {
        $this->instance->unsetFullPeriodRequired();
        return $this;
    }

    /**
     * Sets day of week field.
     *
     * @param string|null $value
     */
    public function dayOfWeek(?string $value): self
    {
        $this->instance->setDayOfWeek($value);
        return $this;
    }

    /**
     * Unsets day of week field.
     */
    public function unsetDayOfWeek(): self
    {
        $this->instance->unsetDayOfWeek();
        return $this;
    }

    /**
     * Sets week of month field.
     *
     * @param int|null $value
     */
    public function weekOfMonth(?int $value): self
    {
        $this->instance->setWeekOfMonth($value);
        return $this;
    }

    /**
     * Unsets week of month field.
     */
    public function unsetWeekOfMonth(): self
    {
        $this->instance->unsetWeekOfMonth();
        return $this;
    }

    /**
     * Sets day of month field.
     *
     * @param int|null $value
     */
    public function dayOfMonth(?int $value): self
    {
        $this->instance->setDayOfMonth($value);
        return $this;
    }

    /**
     * Unsets day of month field.
     */
    public function unsetDayOfMonth(): self
    {
        $this->instance->unsetDayOfMonth();
        return $this;
    }

    /**
     * Sets weekly closing day field.
     *
     * @param string|null $value
     */
    public function weeklyClosingDay(?string $value): self
    {
        $this->instance->setWeeklyClosingDay($value);
        return $this;
    }

    /**
     * Unsets weekly closing day field.
     */
    public function unsetWeeklyClosingDay(): self
    {
        $this->instance->unsetWeeklyClosingDay();
        return $this;
    }

    /**
     * Sets weekly payout day field.
     *
     * @param string|null $value
     */
    public function weeklyPayoutDay(?string $value): self
    {
        $this->instance->setWeeklyPayoutDay($value);
        return $this;
    }

    /**
     * Unsets weekly payout day field.
     */
    public function unsetWeeklyPayoutDay(): self
    {
        $this->instance->unsetWeeklyPayoutDay();
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
     * Initializes a new Merchant Webhook Transfer Schedule Configuration object.
     */
    public function build(): MerchantWebhookTransferScheduleConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
