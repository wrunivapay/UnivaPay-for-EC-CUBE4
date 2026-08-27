<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitSchedule;

/**
 * Builder for model DirectDebitSchedule
 *
 * @see DirectDebitSchedule
 */
class DirectDebitScheduleBuilder
{
    /**
     * @var DirectDebitSchedule
     */
    private $instance;

    private function __construct(DirectDebitSchedule $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Schedule Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitSchedule());
    }

    /**
     * Sets merchant bank account transfer date field.
     *
     * @param \DateTime|null $value
     */
    public function merchantBankAccountTransferDate(?\DateTime $value): self
    {
        $this->instance->setMerchantBankAccountTransferDate($value);
        return $this;
    }

    /**
     * Sets merchant bank account registration deadline field.
     *
     * @param \DateTime|null $value
     */
    public function merchantBankAccountRegistrationDeadline(?\DateTime $value): self
    {
        $this->instance->setMerchantBankAccountRegistrationDeadline($value);
        return $this;
    }

    /**
     * Sets merchant bank transfer upload deadline field.
     *
     * @param \DateTime|null $value
     */
    public function merchantBankTransferUploadDeadline(?\DateTime $value): self
    {
        $this->instance->setMerchantBankTransferUploadDeadline($value);
        return $this;
    }

    /**
     * Sets platform result registration date field.
     *
     * @param \DateTime|null $value
     */
    public function platformResultRegistrationDate(?\DateTime $value): self
    {
        $this->instance->setPlatformResultRegistrationDate($value);
        return $this;
    }

    /**
     * Sets platform scheduled payout field.
     *
     * @param \DateTime|null $value
     */
    public function platformScheduledPayout(?\DateTime $value): self
    {
        $this->instance->setPlatformScheduledPayout($value);
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
     * Initializes a new Direct Debit Schedule object.
     */
    public function build(): DirectDebitSchedule
    {
        return CoreHelper::clone($this->instance);
    }
}
