<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookUserTransactionsConfiguration;

/**
 * Builder for model MerchantWebhookUserTransactionsConfiguration
 *
 * @see MerchantWebhookUserTransactionsConfiguration
 */
class MerchantWebhookUserTransactionsConfigurationBuilder
{
    /**
     * @var MerchantWebhookUserTransactionsConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookUserTransactionsConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook User Transactions Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookUserTransactionsConfiguration());
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
     * Sets notify customer field.
     *
     * @param bool|null $value
     */
    public function notifyCustomer(?bool $value): self
    {
        $this->instance->setNotifyCustomer($value);
        return $this;
    }

    /**
     * Unsets notify customer field.
     */
    public function unsetNotifyCustomer(): self
    {
        $this->instance->unsetNotifyCustomer();
        return $this;
    }

    /**
     * Sets notify on test field.
     *
     * @param bool|null $value
     */
    public function notifyOnTest(?bool $value): self
    {
        $this->instance->setNotifyOnTest($value);
        return $this;
    }

    /**
     * Unsets notify on test field.
     */
    public function unsetNotifyOnTest(): self
    {
        $this->instance->unsetNotifyOnTest();
        return $this;
    }

    /**
     * Sets notify on recurring token creation field.
     *
     * @param bool|null $value
     */
    public function notifyOnRecurringTokenCreation(?bool $value): self
    {
        $this->instance->setNotifyOnRecurringTokenCreation($value);
        return $this;
    }

    /**
     * Unsets notify on recurring token creation field.
     */
    public function unsetNotifyOnRecurringTokenCreation(): self
    {
        $this->instance->unsetNotifyOnRecurringTokenCreation();
        return $this;
    }

    /**
     * Sets notify on recurring token cvv failed field.
     *
     * @param bool|null $value
     */
    public function notifyOnRecurringTokenCvvFailed(?bool $value): self
    {
        $this->instance->setNotifyOnRecurringTokenCvvFailed($value);
        return $this;
    }

    /**
     * Unsets notify on recurring token cvv failed field.
     */
    public function unsetNotifyOnRecurringTokenCvvFailed(): self
    {
        $this->instance->unsetNotifyOnRecurringTokenCvvFailed();
        return $this;
    }

    /**
     * Sets notify on webhook failure field.
     *
     * @param bool|null $value
     */
    public function notifyOnWebhookFailure(?bool $value): self
    {
        $this->instance->setNotifyOnWebhookFailure($value);
        return $this;
    }

    /**
     * Unsets notify on webhook failure field.
     */
    public function unsetNotifyOnWebhookFailure(): self
    {
        $this->instance->unsetNotifyOnWebhookFailure();
        return $this;
    }

    /**
     * Sets notify on webhook disabled field.
     *
     * @param bool|null $value
     */
    public function notifyOnWebhookDisabled(?bool $value): self
    {
        $this->instance->setNotifyOnWebhookDisabled($value);
        return $this;
    }

    /**
     * Unsets notify on webhook disabled field.
     */
    public function unsetNotifyOnWebhookDisabled(): self
    {
        $this->instance->unsetNotifyOnWebhookDisabled();
        return $this;
    }

    /**
     * Sets notify user on failed transactions field.
     *
     * @param bool|null $value
     */
    public function notifyUserOnFailedTransactions(?bool $value): self
    {
        $this->instance->setNotifyUserOnFailedTransactions($value);
        return $this;
    }

    /**
     * Unsets notify user on failed transactions field.
     */
    public function unsetNotifyUserOnFailedTransactions(): self
    {
        $this->instance->unsetNotifyUserOnFailedTransactions();
        return $this;
    }

    /**
     * Sets notify customer on failed transactions field.
     *
     * @param bool|null $value
     */
    public function notifyCustomerOnFailedTransactions(?bool $value): self
    {
        $this->instance->setNotifyCustomerOnFailedTransactions($value);
        return $this;
    }

    /**
     * Unsets notify customer on failed transactions field.
     */
    public function unsetNotifyCustomerOnFailedTransactions(): self
    {
        $this->instance->unsetNotifyCustomerOnFailedTransactions();
        return $this;
    }

    /**
     * Sets notify user on convenience instructions field.
     *
     * @param bool|null $value
     */
    public function notifyUserOnConvenienceInstructions(?bool $value): self
    {
        $this->instance->setNotifyUserOnConvenienceInstructions($value);
        return $this;
    }

    /**
     * Unsets notify user on convenience instructions field.
     */
    public function unsetNotifyUserOnConvenienceInstructions(): self
    {
        $this->instance->unsetNotifyUserOnConvenienceInstructions();
        return $this;
    }

    /**
     * Sets notify on subscriptions field.
     *
     * @param bool|null $value
     */
    public function notifyOnSubscriptions(?bool $value): self
    {
        $this->instance->setNotifyOnSubscriptions($value);
        return $this;
    }

    /**
     * Unsets notify on subscriptions field.
     */
    public function unsetNotifyOnSubscriptions(): self
    {
        $this->instance->unsetNotifyOnSubscriptions();
        return $this;
    }

    /**
     * Sets notify on authorizations field.
     *
     * @param bool|null $value
     */
    public function notifyOnAuthorizations(?bool $value): self
    {
        $this->instance->setNotifyOnAuthorizations($value);
        return $this;
    }

    /**
     * Unsets notify on authorizations field.
     */
    public function unsetNotifyOnAuthorizations(): self
    {
        $this->instance->unsetNotifyOnAuthorizations();
        return $this;
    }

    /**
     * Sets notify on cvv authorizations field.
     *
     * @param bool|null $value
     */
    public function notifyOnCvvAuthorizations(?bool $value): self
    {
        $this->instance->setNotifyOnCvvAuthorizations($value);
        return $this;
    }

    /**
     * Unsets notify on cvv authorizations field.
     */
    public function unsetNotifyOnCvvAuthorizations(): self
    {
        $this->instance->unsetNotifyOnCvvAuthorizations();
        return $this;
    }

    /**
     * Sets notify on cancels field.
     *
     * @param bool|null $value
     */
    public function notifyOnCancels(?bool $value): self
    {
        $this->instance->setNotifyOnCancels($value);
        return $this;
    }

    /**
     * Unsets notify on cancels field.
     */
    public function unsetNotifyOnCancels(): self
    {
        $this->instance->unsetNotifyOnCancels();
        return $this;
    }

    /**
     * Sets customer refer link enabled field.
     *
     * @param bool|null $value
     */
    public function customerReferLinkEnabled(?bool $value): self
    {
        $this->instance->setCustomerReferLinkEnabled($value);
        return $this;
    }

    /**
     * Unsets customer refer link enabled field.
     */
    public function unsetCustomerReferLinkEnabled(): self
    {
        $this->instance->unsetCustomerReferLinkEnabled();
        return $this;
    }

    /**
     * Sets notify on convenience expiry field.
     *
     * @param bool|null $value
     */
    public function notifyOnConvenienceExpiry(?bool $value): self
    {
        $this->instance->setNotifyOnConvenienceExpiry($value);
        return $this;
    }

    /**
     * Unsets notify on convenience expiry field.
     */
    public function unsetNotifyOnConvenienceExpiry(): self
    {
        $this->instance->unsetNotifyOnConvenienceExpiry();
        return $this;
    }

    /**
     * Sets notify on recurring token creation with three ds field.
     *
     * @param bool|null $value
     */
    public function notifyOnRecurringTokenCreationWithThreeDs(?bool $value): self
    {
        $this->instance->setNotifyOnRecurringTokenCreationWithThreeDs($value);
        return $this;
    }

    /**
     * Unsets notify on recurring token creation with three ds field.
     */
    public function unsetNotifyOnRecurringTokenCreationWithThreeDs(): self
    {
        $this->instance->unsetNotifyOnRecurringTokenCreationWithThreeDs();
        return $this;
    }

    /**
     * Sets notify on chargebacks field.
     *
     * @param bool|null $value
     */
    public function notifyOnChargebacks(?bool $value): self
    {
        $this->instance->setNotifyOnChargebacks($value);
        return $this;
    }

    /**
     * Unsets notify on chargebacks field.
     */
    public function unsetNotifyOnChargebacks(): self
    {
        $this->instance->unsetNotifyOnChargebacks();
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
     * Initializes a new Merchant Webhook User Transactions Configuration object.
     */
    public function build(): MerchantWebhookUserTransactionsConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
