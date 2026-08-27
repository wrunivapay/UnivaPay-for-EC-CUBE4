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
 * Subscription feature configuration.
 */
class MerchantWebhookSubscriptionConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $failedChargesToCancel = [];

    /**
     * @var array
     */
    private $suspendOnCancel = [];

    /**
     * @var array
     */
    private $allowMerchantAmountPatch = [];

    /**
     * @var array
     */
    private $allowMerchantDueDatePatch = [];

    /**
     * Returns Enabled.
     * Enables subscription payments.
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
     * Enables subscription payments.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables subscription payments.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Failed Charges to Cancel.
     * Number of failed charges allowed before cancellation.
     */
    public function getFailedChargesToCancel(): ?int
    {
        if (count($this->failedChargesToCancel) == 0) {
            return null;
        }
        return $this->failedChargesToCancel['value'];
    }

    /**
     * Sets Failed Charges to Cancel.
     * Number of failed charges allowed before cancellation.
     *
     * @maps failed_charges_to_cancel
     */
    public function setFailedChargesToCancel(?int $failedChargesToCancel): void
    {
        $this->failedChargesToCancel['value'] = $failedChargesToCancel;
    }

    /**
     * Unsets Failed Charges to Cancel.
     * Number of failed charges allowed before cancellation.
     */
    public function unsetFailedChargesToCancel(): void
    {
        $this->failedChargesToCancel = [];
    }

    /**
     * Returns Suspend on Cancel.
     * Suspends the subscription when its latest charge is canceled.
     */
    public function getSuspendOnCancel(): ?bool
    {
        if (count($this->suspendOnCancel) == 0) {
            return null;
        }
        return $this->suspendOnCancel['value'];
    }

    /**
     * Sets Suspend on Cancel.
     * Suspends the subscription when its latest charge is canceled.
     *
     * @maps suspend_on_cancel
     */
    public function setSuspendOnCancel(?bool $suspendOnCancel): void
    {
        $this->suspendOnCancel['value'] = $suspendOnCancel;
    }

    /**
     * Unsets Suspend on Cancel.
     * Suspends the subscription when its latest charge is canceled.
     */
    public function unsetSuspendOnCancel(): void
    {
        $this->suspendOnCancel = [];
    }

    /**
     * Returns Allow Merchant Amount Patch.
     * Allows merchants to update scheduled subscription amounts.
     */
    public function getAllowMerchantAmountPatch(): ?bool
    {
        if (count($this->allowMerchantAmountPatch) == 0) {
            return null;
        }
        return $this->allowMerchantAmountPatch['value'];
    }

    /**
     * Sets Allow Merchant Amount Patch.
     * Allows merchants to update scheduled subscription amounts.
     *
     * @maps allow_merchant_amount_patch
     */
    public function setAllowMerchantAmountPatch(?bool $allowMerchantAmountPatch): void
    {
        $this->allowMerchantAmountPatch['value'] = $allowMerchantAmountPatch;
    }

    /**
     * Unsets Allow Merchant Amount Patch.
     * Allows merchants to update scheduled subscription amounts.
     */
    public function unsetAllowMerchantAmountPatch(): void
    {
        $this->allowMerchantAmountPatch = [];
    }

    /**
     * Returns Allow Merchant Due Date Patch.
     * Allows merchants to update scheduled subscription due dates.
     */
    public function getAllowMerchantDueDatePatch(): ?bool
    {
        if (count($this->allowMerchantDueDatePatch) == 0) {
            return null;
        }
        return $this->allowMerchantDueDatePatch['value'];
    }

    /**
     * Sets Allow Merchant Due Date Patch.
     * Allows merchants to update scheduled subscription due dates.
     *
     * @maps allow_merchant_due_date_patch
     */
    public function setAllowMerchantDueDatePatch(?bool $allowMerchantDueDatePatch): void
    {
        $this->allowMerchantDueDatePatch['value'] = $allowMerchantDueDatePatch;
    }

    /**
     * Unsets Allow Merchant Due Date Patch.
     * Allows merchants to update scheduled subscription due dates.
     */
    public function unsetAllowMerchantDueDatePatch(): void
    {
        $this->allowMerchantDueDatePatch = [];
    }

    /**
     * Converts the MerchantWebhookSubscriptionConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookSubscriptionConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookSubscriptionConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'failedChargesToCancel' => $this->getFailedChargesToCancel(),
                'suspendOnCancel' => $this->getSuspendOnCancel(),
                'allowMerchantAmountPatch' => $this->getAllowMerchantAmountPatch(),
                'allowMerchantDueDatePatch' => $this->getAllowMerchantDueDatePatch(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'failed_charges_to_cancel',
        'suspend_on_cancel',
        'allow_merchant_amount_patch',
        'allow_merchant_due_date_patch'
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
            $json['enabled']                       = $this->enabled['value'];
        }
        if (!empty($this->failedChargesToCancel)) {
            $json['failed_charges_to_cancel']      = $this->failedChargesToCancel['value'];
        }
        if (!empty($this->suspendOnCancel)) {
            $json['suspend_on_cancel']             = $this->suspendOnCancel['value'];
        }
        if (!empty($this->allowMerchantAmountPatch)) {
            $json['allow_merchant_amount_patch']   = $this->allowMerchantAmountPatch['value'];
        }
        if (!empty($this->allowMerchantDueDatePatch)) {
            $json['allow_merchant_due_date_patch'] = $this->allowMerchantDueDatePatch['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
