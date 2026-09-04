<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;

/**
 * Merchant transaction notification settings.
 */
class MerchantWebhookUserTransactionsConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $notifyCustomer = [];

    /**
     * @var array
     */
    private $notifyOnTest = [];

    /**
     * @var array
     */
    private $notifyOnRecurringTokenCreation = [];

    /**
     * @var array
     */
    private $notifyOnRecurringTokenCvvFailed = [];

    /**
     * @var array
     */
    private $notifyOnWebhookFailure = [];

    /**
     * @var array
     */
    private $notifyOnWebhookDisabled = [];

    /**
     * @var array
     */
    private $notifyUserOnFailedTransactions = [];

    /**
     * @var array
     */
    private $notifyCustomerOnFailedTransactions = [];

    /**
     * @var array
     */
    private $notifyUserOnConvenienceInstructions = [];

    /**
     * @var array
     */
    private $notifyOnSubscriptions = [];

    /**
     * @var array
     */
    private $notifyOnAuthorizations = [];

    /**
     * @var array
     */
    private $notifyOnCvvAuthorizations = [];

    /**
     * @var array
     */
    private $notifyOnCancels = [];

    /**
     * @var array
     */
    private $customerReferLinkEnabled = [];

    /**
     * @var array
     */
    private $notifyOnConvenienceExpiry = [];

    /**
     * @var array
     */
    private $notifyOnRecurringTokenCreationWithThreeDs = [];

    /**
     * @var array
     */
    private $notifyOnChargebacks = [];

    /**
     * Returns Enabled.
     * Enables merchant transaction notifications.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables merchant transaction notifications.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables merchant transaction notifications.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Notify Customer.
     * Sends transaction notifications to the customer.
     */
    public function getNotifyCustomer(): ?bool
    {
        if (count($this->notifyCustomer) == 0) {
            return null;
        }
        return $this->notifyCustomer['value'];
    }

    /**
     * Sets Notify Customer.
     * Sends transaction notifications to the customer.
     *
     * @maps notify_customer
     */
    public function setNotifyCustomer(?bool $notifyCustomer): void
    {
        $this->notifyCustomer['value'] = $notifyCustomer;
    }

    /**
     * Unsets Notify Customer.
     * Sends transaction notifications to the customer.
     */
    public function unsetNotifyCustomer(): void
    {
        $this->notifyCustomer = [];
    }

    /**
     * Returns Notify on Test.
     * Sends notifications for test-mode events.
     */
    public function getNotifyOnTest(): ?bool
    {
        if (count($this->notifyOnTest) == 0) {
            return null;
        }
        return $this->notifyOnTest['value'];
    }

    /**
     * Sets Notify on Test.
     * Sends notifications for test-mode events.
     *
     * @maps notify_on_test
     */
    public function setNotifyOnTest(?bool $notifyOnTest): void
    {
        $this->notifyOnTest['value'] = $notifyOnTest;
    }

    /**
     * Unsets Notify on Test.
     * Sends notifications for test-mode events.
     */
    public function unsetNotifyOnTest(): void
    {
        $this->notifyOnTest = [];
    }

    /**
     * Returns Notify on Recurring Token Creation.
     * Sends notifications when a recurring token is created.
     */
    public function getNotifyOnRecurringTokenCreation(): ?bool
    {
        if (count($this->notifyOnRecurringTokenCreation) == 0) {
            return null;
        }
        return $this->notifyOnRecurringTokenCreation['value'];
    }

    /**
     * Sets Notify on Recurring Token Creation.
     * Sends notifications when a recurring token is created.
     *
     * @maps notify_on_recurring_token_creation
     */
    public function setNotifyOnRecurringTokenCreation(?bool $notifyOnRecurringTokenCreation): void
    {
        $this->notifyOnRecurringTokenCreation['value'] = $notifyOnRecurringTokenCreation;
    }

    /**
     * Unsets Notify on Recurring Token Creation.
     * Sends notifications when a recurring token is created.
     */
    public function unsetNotifyOnRecurringTokenCreation(): void
    {
        $this->notifyOnRecurringTokenCreation = [];
    }

    /**
     * Returns Notify on Recurring Token Cvv Failed.
     * Sends notifications when recurring-token CVV confirmation fails.
     */
    public function getNotifyOnRecurringTokenCvvFailed(): ?bool
    {
        if (count($this->notifyOnRecurringTokenCvvFailed) == 0) {
            return null;
        }
        return $this->notifyOnRecurringTokenCvvFailed['value'];
    }

    /**
     * Sets Notify on Recurring Token Cvv Failed.
     * Sends notifications when recurring-token CVV confirmation fails.
     *
     * @maps notify_on_recurring_token_cvv_failed
     */
    public function setNotifyOnRecurringTokenCvvFailed(?bool $notifyOnRecurringTokenCvvFailed): void
    {
        $this->notifyOnRecurringTokenCvvFailed['value'] = $notifyOnRecurringTokenCvvFailed;
    }

    /**
     * Unsets Notify on Recurring Token Cvv Failed.
     * Sends notifications when recurring-token CVV confirmation fails.
     */
    public function unsetNotifyOnRecurringTokenCvvFailed(): void
    {
        $this->notifyOnRecurringTokenCvvFailed = [];
    }

    /**
     * Returns Notify on Webhook Failure.
     * Sends notifications after repeated webhook delivery failures.
     */
    public function getNotifyOnWebhookFailure(): ?bool
    {
        if (count($this->notifyOnWebhookFailure) == 0) {
            return null;
        }
        return $this->notifyOnWebhookFailure['value'];
    }

    /**
     * Sets Notify on Webhook Failure.
     * Sends notifications after repeated webhook delivery failures.
     *
     * @maps notify_on_webhook_failure
     */
    public function setNotifyOnWebhookFailure(?bool $notifyOnWebhookFailure): void
    {
        $this->notifyOnWebhookFailure['value'] = $notifyOnWebhookFailure;
    }

    /**
     * Unsets Notify on Webhook Failure.
     * Sends notifications after repeated webhook delivery failures.
     */
    public function unsetNotifyOnWebhookFailure(): void
    {
        $this->notifyOnWebhookFailure = [];
    }

    /**
     * Returns Notify on Webhook Disabled.
     * Sends notifications when webhook delivery is disabled.
     */
    public function getNotifyOnWebhookDisabled(): ?bool
    {
        if (count($this->notifyOnWebhookDisabled) == 0) {
            return null;
        }
        return $this->notifyOnWebhookDisabled['value'];
    }

    /**
     * Sets Notify on Webhook Disabled.
     * Sends notifications when webhook delivery is disabled.
     *
     * @maps notify_on_webhook_disabled
     */
    public function setNotifyOnWebhookDisabled(?bool $notifyOnWebhookDisabled): void
    {
        $this->notifyOnWebhookDisabled['value'] = $notifyOnWebhookDisabled;
    }

    /**
     * Unsets Notify on Webhook Disabled.
     * Sends notifications when webhook delivery is disabled.
     */
    public function unsetNotifyOnWebhookDisabled(): void
    {
        $this->notifyOnWebhookDisabled = [];
    }

    /**
     * Returns Notify User on Failed Transactions.
     * Sends merchant notifications for failed transactions.
     */
    public function getNotifyUserOnFailedTransactions(): ?bool
    {
        if (count($this->notifyUserOnFailedTransactions) == 0) {
            return null;
        }
        return $this->notifyUserOnFailedTransactions['value'];
    }

    /**
     * Sets Notify User on Failed Transactions.
     * Sends merchant notifications for failed transactions.
     *
     * @maps notify_user_on_failed_transactions
     */
    public function setNotifyUserOnFailedTransactions(?bool $notifyUserOnFailedTransactions): void
    {
        $this->notifyUserOnFailedTransactions['value'] = $notifyUserOnFailedTransactions;
    }

    /**
     * Unsets Notify User on Failed Transactions.
     * Sends merchant notifications for failed transactions.
     */
    public function unsetNotifyUserOnFailedTransactions(): void
    {
        $this->notifyUserOnFailedTransactions = [];
    }

    /**
     * Returns Notify Customer on Failed Transactions.
     * Sends customer notifications for failed transactions.
     */
    public function getNotifyCustomerOnFailedTransactions(): ?bool
    {
        if (count($this->notifyCustomerOnFailedTransactions) == 0) {
            return null;
        }
        return $this->notifyCustomerOnFailedTransactions['value'];
    }

    /**
     * Sets Notify Customer on Failed Transactions.
     * Sends customer notifications for failed transactions.
     *
     * @maps notify_customer_on_failed_transactions
     */
    public function setNotifyCustomerOnFailedTransactions(?bool $notifyCustomerOnFailedTransactions): void
    {
        $this->notifyCustomerOnFailedTransactions['value'] = $notifyCustomerOnFailedTransactions;
    }

    /**
     * Unsets Notify Customer on Failed Transactions.
     * Sends customer notifications for failed transactions.
     */
    public function unsetNotifyCustomerOnFailedTransactions(): void
    {
        $this->notifyCustomerOnFailedTransactions = [];
    }

    /**
     * Returns Notify User on Convenience Instructions.
     * Sends merchant notifications with convenience-store payment instructions.
     */
    public function getNotifyUserOnConvenienceInstructions(): ?bool
    {
        if (count($this->notifyUserOnConvenienceInstructions) == 0) {
            return null;
        }
        return $this->notifyUserOnConvenienceInstructions['value'];
    }

    /**
     * Sets Notify User on Convenience Instructions.
     * Sends merchant notifications with convenience-store payment instructions.
     *
     * @maps notify_user_on_convenience_instructions
     */
    public function setNotifyUserOnConvenienceInstructions(?bool $notifyUserOnConvenienceInstructions): void
    {
        $this->notifyUserOnConvenienceInstructions['value'] = $notifyUserOnConvenienceInstructions;
    }

    /**
     * Unsets Notify User on Convenience Instructions.
     * Sends merchant notifications with convenience-store payment instructions.
     */
    public function unsetNotifyUserOnConvenienceInstructions(): void
    {
        $this->notifyUserOnConvenienceInstructions = [];
    }

    /**
     * Returns Notify on Subscriptions.
     * Sends notifications for subscription lifecycle events.
     */
    public function getNotifyOnSubscriptions(): ?bool
    {
        if (count($this->notifyOnSubscriptions) == 0) {
            return null;
        }
        return $this->notifyOnSubscriptions['value'];
    }

    /**
     * Sets Notify on Subscriptions.
     * Sends notifications for subscription lifecycle events.
     *
     * @maps notify_on_subscriptions
     */
    public function setNotifyOnSubscriptions(?bool $notifyOnSubscriptions): void
    {
        $this->notifyOnSubscriptions['value'] = $notifyOnSubscriptions;
    }

    /**
     * Unsets Notify on Subscriptions.
     * Sends notifications for subscription lifecycle events.
     */
    public function unsetNotifyOnSubscriptions(): void
    {
        $this->notifyOnSubscriptions = [];
    }

    /**
     * Returns Notify on Authorizations.
     * Sends notifications for authorization-only charges.
     */
    public function getNotifyOnAuthorizations(): ?bool
    {
        if (count($this->notifyOnAuthorizations) == 0) {
            return null;
        }
        return $this->notifyOnAuthorizations['value'];
    }

    /**
     * Sets Notify on Authorizations.
     * Sends notifications for authorization-only charges.
     *
     * @maps notify_on_authorizations
     */
    public function setNotifyOnAuthorizations(?bool $notifyOnAuthorizations): void
    {
        $this->notifyOnAuthorizations['value'] = $notifyOnAuthorizations;
    }

    /**
     * Unsets Notify on Authorizations.
     * Sends notifications for authorization-only charges.
     */
    public function unsetNotifyOnAuthorizations(): void
    {
        $this->notifyOnAuthorizations = [];
    }

    /**
     * Returns Notify on Cvv Authorizations.
     * Sends notifications for CVV authorization events.
     */
    public function getNotifyOnCvvAuthorizations(): ?bool
    {
        if (count($this->notifyOnCvvAuthorizations) == 0) {
            return null;
        }
        return $this->notifyOnCvvAuthorizations['value'];
    }

    /**
     * Sets Notify on Cvv Authorizations.
     * Sends notifications for CVV authorization events.
     *
     * @maps notify_on_cvv_authorizations
     */
    public function setNotifyOnCvvAuthorizations(?bool $notifyOnCvvAuthorizations): void
    {
        $this->notifyOnCvvAuthorizations['value'] = $notifyOnCvvAuthorizations;
    }

    /**
     * Unsets Notify on Cvv Authorizations.
     * Sends notifications for CVV authorization events.
     */
    public function unsetNotifyOnCvvAuthorizations(): void
    {
        $this->notifyOnCvvAuthorizations = [];
    }

    /**
     * Returns Notify on Cancels.
     * Sends notifications when charges are canceled.
     */
    public function getNotifyOnCancels(): ?bool
    {
        if (count($this->notifyOnCancels) == 0) {
            return null;
        }
        return $this->notifyOnCancels['value'];
    }

    /**
     * Sets Notify on Cancels.
     * Sends notifications when charges are canceled.
     *
     * @maps notify_on_cancels
     */
    public function setNotifyOnCancels(?bool $notifyOnCancels): void
    {
        $this->notifyOnCancels['value'] = $notifyOnCancels;
    }

    /**
     * Unsets Notify on Cancels.
     * Sends notifications when charges are canceled.
     */
    public function unsetNotifyOnCancels(): void
    {
        $this->notifyOnCancels = [];
    }

    /**
     * Returns Customer Refer Link Enabled.
     * Includes customer self-service links in supported notifications.
     */
    public function getCustomerReferLinkEnabled(): ?bool
    {
        if (count($this->customerReferLinkEnabled) == 0) {
            return null;
        }
        return $this->customerReferLinkEnabled['value'];
    }

    /**
     * Sets Customer Refer Link Enabled.
     * Includes customer self-service links in supported notifications.
     *
     * @maps customer_refer_link_enabled
     */
    public function setCustomerReferLinkEnabled(?bool $customerReferLinkEnabled): void
    {
        $this->customerReferLinkEnabled['value'] = $customerReferLinkEnabled;
    }

    /**
     * Unsets Customer Refer Link Enabled.
     * Includes customer self-service links in supported notifications.
     */
    public function unsetCustomerReferLinkEnabled(): void
    {
        $this->customerReferLinkEnabled = [];
    }

    /**
     * Returns Notify on Convenience Expiry.
     * Sends notifications when convenience payments expire.
     */
    public function getNotifyOnConvenienceExpiry(): ?bool
    {
        if (count($this->notifyOnConvenienceExpiry) == 0) {
            return null;
        }
        return $this->notifyOnConvenienceExpiry['value'];
    }

    /**
     * Sets Notify on Convenience Expiry.
     * Sends notifications when convenience payments expire.
     *
     * @maps notify_on_convenience_expiry
     */
    public function setNotifyOnConvenienceExpiry(?bool $notifyOnConvenienceExpiry): void
    {
        $this->notifyOnConvenienceExpiry['value'] = $notifyOnConvenienceExpiry;
    }

    /**
     * Unsets Notify on Convenience Expiry.
     * Sends notifications when convenience payments expire.
     */
    public function unsetNotifyOnConvenienceExpiry(): void
    {
        $this->notifyOnConvenienceExpiry = [];
    }

    /**
     * Returns Notify on Recurring Token Creation With Three Ds.
     * Sends notifications when recurring tokens are created through 3-D Secure.
     */
    public function getNotifyOnRecurringTokenCreationWithThreeDs(): ?bool
    {
        if (count($this->notifyOnRecurringTokenCreationWithThreeDs) == 0) {
            return null;
        }
        return $this->notifyOnRecurringTokenCreationWithThreeDs['value'];
    }

    /**
     * Sets Notify on Recurring Token Creation With Three Ds.
     * Sends notifications when recurring tokens are created through 3-D Secure.
     *
     * @maps notify_on_recurring_token_creation_with_three_ds
     */
    public function setNotifyOnRecurringTokenCreationWithThreeDs(
        ?bool $notifyOnRecurringTokenCreationWithThreeDs
    ): void {
        $this->notifyOnRecurringTokenCreationWithThreeDs['value'] = $notifyOnRecurringTokenCreationWithThreeDs;
    }

    /**
     * Unsets Notify on Recurring Token Creation With Three Ds.
     * Sends notifications when recurring tokens are created through 3-D Secure.
     */
    public function unsetNotifyOnRecurringTokenCreationWithThreeDs(): void
    {
        $this->notifyOnRecurringTokenCreationWithThreeDs = [];
    }

    /**
     * Returns Notify on Chargebacks.
     * Sends notifications for chargeback events.
     */
    public function getNotifyOnChargebacks(): ?bool
    {
        if (count($this->notifyOnChargebacks) == 0) {
            return null;
        }
        return $this->notifyOnChargebacks['value'];
    }

    /**
     * Sets Notify on Chargebacks.
     * Sends notifications for chargeback events.
     *
     * @maps notify_on_chargebacks
     */
    public function setNotifyOnChargebacks(?bool $notifyOnChargebacks): void
    {
        $this->notifyOnChargebacks['value'] = $notifyOnChargebacks;
    }

    /**
     * Unsets Notify on Chargebacks.
     * Sends notifications for chargeback events.
     */
    public function unsetNotifyOnChargebacks(): void
    {
        $this->notifyOnChargebacks = [];
    }

    /**
     * Converts the MerchantWebhookUserTransactionsConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookUserTransactionsConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookUserTransactionsConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'notifyCustomer' => $this->getNotifyCustomer(),
                'notifyOnTest' => $this->getNotifyOnTest(),
                'notifyOnRecurringTokenCreation' => $this->getNotifyOnRecurringTokenCreation(),
                'notifyOnRecurringTokenCvvFailed' => $this->getNotifyOnRecurringTokenCvvFailed(),
                'notifyOnWebhookFailure' => $this->getNotifyOnWebhookFailure(),
                'notifyOnWebhookDisabled' => $this->getNotifyOnWebhookDisabled(),
                'notifyUserOnFailedTransactions' => $this->getNotifyUserOnFailedTransactions(),
                'notifyCustomerOnFailedTransactions' => $this->getNotifyCustomerOnFailedTransactions(),
                'notifyUserOnConvenienceInstructions' => $this->getNotifyUserOnConvenienceInstructions(),
                'notifyOnSubscriptions' => $this->getNotifyOnSubscriptions(),
                'notifyOnAuthorizations' => $this->getNotifyOnAuthorizations(),
                'notifyOnCvvAuthorizations' => $this->getNotifyOnCvvAuthorizations(),
                'notifyOnCancels' => $this->getNotifyOnCancels(),
                'customerReferLinkEnabled' => $this->getCustomerReferLinkEnabled(),
                'notifyOnConvenienceExpiry' => $this->getNotifyOnConvenienceExpiry(),
                'notifyOnRecurringTokenCreationWithThreeDs' => $this->getNotifyOnRecurringTokenCreationWithThreeDs(),
                'notifyOnChargebacks' => $this->getNotifyOnChargebacks(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'notify_customer',
        'notify_on_test',
        'notify_on_recurring_token_creation',
        'notify_on_recurring_token_cvv_failed',
        'notify_on_webhook_failure',
        'notify_on_webhook_disabled',
        'notify_user_on_failed_transactions',
        'notify_customer_on_failed_transactions',
        'notify_user_on_convenience_instructions',
        'notify_on_subscriptions',
        'notify_on_authorizations',
        'notify_on_cvv_authorizations',
        'notify_on_cancels',
        'customer_refer_link_enabled',
        'notify_on_convenience_expiry',
        'notify_on_recurring_token_creation_with_three_ds',
        'notify_on_chargebacks'
    ];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->enabled)) {
            $json['enabled']                                          = $this->enabled['value'];
        }
        if (!empty($this->notifyCustomer)) {
            $json['notify_customer']                                  = $this->notifyCustomer['value'];
        }
        if (!empty($this->notifyOnTest)) {
            $json['notify_on_test']                                   = $this->notifyOnTest['value'];
        }
        if (!empty($this->notifyOnRecurringTokenCreation)) {
            $json['notify_on_recurring_token_creation']               = $this->notifyOnRecurringTokenCreation['value'];
        }
        if (!empty($this->notifyOnRecurringTokenCvvFailed)) {
            $json['notify_on_recurring_token_cvv_failed']             = $this->notifyOnRecurringTokenCvvFailed['value'];
        }
        if (!empty($this->notifyOnWebhookFailure)) {
            $json['notify_on_webhook_failure']                        = $this->notifyOnWebhookFailure['value'];
        }
        if (!empty($this->notifyOnWebhookDisabled)) {
            $json['notify_on_webhook_disabled']                       = $this->notifyOnWebhookDisabled['value'];
        }
        if (!empty($this->notifyUserOnFailedTransactions)) {
            $json['notify_user_on_failed_transactions']               = $this->notifyUserOnFailedTransactions['value'];
        }
        if (!empty($this->notifyCustomerOnFailedTransactions)) {
            $json['notify_customer_on_failed_transactions']           =
                $this->notifyCustomerOnFailedTransactions['value'];
        }
        if (!empty($this->notifyUserOnConvenienceInstructions)) {
            $json['notify_user_on_convenience_instructions']          =
                $this->notifyUserOnConvenienceInstructions['value'];
        }
        if (!empty($this->notifyOnSubscriptions)) {
            $json['notify_on_subscriptions']                          = $this->notifyOnSubscriptions['value'];
        }
        if (!empty($this->notifyOnAuthorizations)) {
            $json['notify_on_authorizations']                         = $this->notifyOnAuthorizations['value'];
        }
        if (!empty($this->notifyOnCvvAuthorizations)) {
            $json['notify_on_cvv_authorizations']                     = $this->notifyOnCvvAuthorizations['value'];
        }
        if (!empty($this->notifyOnCancels)) {
            $json['notify_on_cancels']                                = $this->notifyOnCancels['value'];
        }
        if (!empty($this->customerReferLinkEnabled)) {
            $json['customer_refer_link_enabled']                      = $this->customerReferLinkEnabled['value'];
        }
        if (!empty($this->notifyOnConvenienceExpiry)) {
            $json['notify_on_convenience_expiry']                     = $this->notifyOnConvenienceExpiry['value'];
        }
        if (!empty($this->notifyOnRecurringTokenCreationWithThreeDs)) {
            $json['notify_on_recurring_token_creation_with_three_ds'] =
                $this->notifyOnRecurringTokenCreationWithThreeDs['value'];
        }
        if (!empty($this->notifyOnChargebacks)) {
            $json['notify_on_chargebacks']                            = $this->notifyOnChargebacks['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
