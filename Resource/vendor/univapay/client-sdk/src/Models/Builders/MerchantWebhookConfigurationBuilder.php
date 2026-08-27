<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookBankTransferConfiguration;
use UnivaPay\Models\MerchantWebhookCardBrandPercentFees;
use UnivaPay\Models\MerchantWebhookCardConfiguration;
use UnivaPay\Models\MerchantWebhookCheckoutConfiguration;
use UnivaPay\Models\MerchantWebhookConfiguration;
use UnivaPay\Models\MerchantWebhookConvenienceConfiguration;
use UnivaPay\Models\MerchantWebhookCustomerManagementConfiguration;
use UnivaPay\Models\MerchantWebhookInstallmentPlanConfiguration;
use UnivaPay\Models\MerchantWebhookMoneyAmount;
use UnivaPay\Models\MerchantWebhookOnlineConfiguration;
use UnivaPay\Models\MerchantWebhookPaidyConfiguration;
use UnivaPay\Models\MerchantWebhookQrMerchantConfiguration;
use UnivaPay\Models\MerchantWebhookQrScanConfiguration;
use UnivaPay\Models\MerchantWebhookRecurringTokenConfiguration;
use UnivaPay\Models\MerchantWebhookSecurityConfiguration;
use UnivaPay\Models\MerchantWebhookSubscriptionConfiguration;
use UnivaPay\Models\MerchantWebhookSubscriptionPlanConfiguration;
use UnivaPay\Models\MerchantWebhookTransferScheduleConfiguration;
use UnivaPay\Models\MerchantWebhookUserTransactionsConfiguration;

/**
 * Builder for model MerchantWebhookConfiguration
 *
 * @see MerchantWebhookConfiguration
 */
class MerchantWebhookConfigurationBuilder
{
    /**
     * @var MerchantWebhookConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookConfiguration());
    }

    /**
     * Sets percent fee field.
     *
     * @param float|null $value
     */
    public function percentFee(?float $value): self
    {
        $this->instance->setPercentFee($value);
        return $this;
    }

    /**
     * Unsets percent fee field.
     */
    public function unsetPercentFee(): self
    {
        $this->instance->unsetPercentFee();
        return $this;
    }

    /**
     * Sets flat fees field.
     *
     * @param MerchantWebhookMoneyAmount[]|null $value
     */
    public function flatFees(?array $value): self
    {
        $this->instance->setFlatFees($value);
        return $this;
    }

    /**
     * Sets logo url field.
     *
     * @param string|null $value
     */
    public function logoUrl(?string $value): self
    {
        $this->instance->setLogoUrl($value);
        return $this;
    }

    /**
     * Unsets logo url field.
     */
    public function unsetLogoUrl(): self
    {
        $this->instance->unsetLogoUrl();
        return $this;
    }

    /**
     * Sets country field.
     *
     * @param string|null $value
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Unsets country field.
     */
    public function unsetCountry(): self
    {
        $this->instance->unsetCountry();
        return $this;
    }

    /**
     * Sets language field.
     *
     * @param string|null $value
     */
    public function language(?string $value): self
    {
        $this->instance->setLanguage($value);
        return $this;
    }

    /**
     * Unsets language field.
     */
    public function unsetLanguage(): self
    {
        $this->instance->unsetLanguage();
        return $this;
    }

    /**
     * Sets display time zone field.
     *
     * @param string|null $value
     */
    public function displayTimeZone(?string $value): self
    {
        $this->instance->setDisplayTimeZone($value);
        return $this;
    }

    /**
     * Unsets display time zone field.
     */
    public function unsetDisplayTimeZone(): self
    {
        $this->instance->unsetDisplayTimeZone();
        return $this;
    }

    /**
     * Sets min transfer payout field.
     *
     * @param MerchantWebhookMoneyAmount|null $value
     */
    public function minTransferPayout(?MerchantWebhookMoneyAmount $value): self
    {
        $this->instance->setMinTransferPayout($value);
        return $this;
    }

    /**
     * Sets minimum charge amounts field.
     *
     * @param MerchantWebhookMoneyAmount[]|null $value
     */
    public function minimumChargeAmounts(?array $value): self
    {
        $this->instance->setMinimumChargeAmounts($value);
        return $this;
    }

    /**
     * Sets maximum charge amounts field.
     *
     * @param MerchantWebhookMoneyAmount[]|null $value
     */
    public function maximumChargeAmounts(?array $value): self
    {
        $this->instance->setMaximumChargeAmounts($value);
        return $this;
    }

    /**
     * Sets transfer schedule field.
     *
     * @param MerchantWebhookTransferScheduleConfiguration|null $value
     */
    public function transferSchedule(?MerchantWebhookTransferScheduleConfiguration $value): self
    {
        $this->instance->setTransferSchedule($value);
        return $this;
    }

    /**
     * Sets user transactions configuration field.
     *
     * @param MerchantWebhookUserTransactionsConfiguration|null $value
     */
    public function userTransactionsConfiguration(?MerchantWebhookUserTransactionsConfiguration $value): self
    {
        $this->instance->setUserTransactionsConfiguration($value);
        return $this;
    }

    /**
     * Sets recurring token configuration field.
     *
     * @param MerchantWebhookRecurringTokenConfiguration|null $value
     */
    public function recurringTokenConfiguration(?MerchantWebhookRecurringTokenConfiguration $value): self
    {
        $this->instance->setRecurringTokenConfiguration($value);
        return $this;
    }

    /**
     * Sets security configuration field.
     *
     * @param MerchantWebhookSecurityConfiguration|null $value
     */
    public function securityConfiguration(?MerchantWebhookSecurityConfiguration $value): self
    {
        $this->instance->setSecurityConfiguration($value);
        return $this;
    }

    /**
     * Sets checkout configuration field.
     *
     * @param MerchantWebhookCheckoutConfiguration|null $value
     */
    public function checkoutConfiguration(?MerchantWebhookCheckoutConfiguration $value): self
    {
        $this->instance->setCheckoutConfiguration($value);
        return $this;
    }

    /**
     * Sets installments configuration field.
     *
     * @param MerchantWebhookInstallmentPlanConfiguration|null $value
     */
    public function installmentsConfiguration(?MerchantWebhookInstallmentPlanConfiguration $value): self
    {
        $this->instance->setInstallmentsConfiguration($value);
        return $this;
    }

    /**
     * Sets subscription plan configuration field.
     *
     * @param MerchantWebhookSubscriptionPlanConfiguration|null $value
     */
    public function subscriptionPlanConfiguration(?MerchantWebhookSubscriptionPlanConfiguration $value): self
    {
        $this->instance->setSubscriptionPlanConfiguration($value);
        return $this;
    }

    /**
     * Sets card brand percent fees field.
     *
     * @param MerchantWebhookCardBrandPercentFees|null $value
     */
    public function cardBrandPercentFees(?MerchantWebhookCardBrandPercentFees $value): self
    {
        $this->instance->setCardBrandPercentFees($value);
        return $this;
    }

    /**
     * Sets subscription configuration field.
     *
     * @param MerchantWebhookSubscriptionConfiguration|null $value
     */
    public function subscriptionConfiguration(?MerchantWebhookSubscriptionConfiguration $value): self
    {
        $this->instance->setSubscriptionConfiguration($value);
        return $this;
    }

    /**
     * Sets customer management configuration field.
     *
     * @param MerchantWebhookCustomerManagementConfiguration|null $value
     */
    public function customerManagementConfiguration(?MerchantWebhookCustomerManagementConfiguration $value): self
    {
        $this->instance->setCustomerManagementConfiguration($value);
        return $this;
    }

    /**
     * Sets descriptor provided configuration field.
     *
     * @param bool|null $value
     */
    public function descriptorProvidedConfiguration(?bool $value): self
    {
        $this->instance->setDescriptorProvidedConfiguration($value);
        return $this;
    }

    /**
     * Unsets descriptor provided configuration field.
     */
    public function unsetDescriptorProvidedConfiguration(): self
    {
        $this->instance->unsetDescriptorProvidedConfiguration();
        return $this;
    }

    /**
     * Sets card configuration field.
     *
     * @param MerchantWebhookCardConfiguration|null $value
     */
    public function cardConfiguration(?MerchantWebhookCardConfiguration $value): self
    {
        $this->instance->setCardConfiguration($value);
        return $this;
    }

    /**
     * Sets qr scan configuration field.
     *
     * @param MerchantWebhookQrScanConfiguration|null $value
     */
    public function qrScanConfiguration(?MerchantWebhookQrScanConfiguration $value): self
    {
        $this->instance->setQrScanConfiguration($value);
        return $this;
    }

    /**
     * Sets convenience configuration field.
     *
     * @param MerchantWebhookConvenienceConfiguration|null $value
     */
    public function convenienceConfiguration(?MerchantWebhookConvenienceConfiguration $value): self
    {
        $this->instance->setConvenienceConfiguration($value);
        return $this;
    }

    /**
     * Sets paidy configuration field.
     *
     * @param MerchantWebhookPaidyConfiguration|null $value
     */
    public function paidyConfiguration(?MerchantWebhookPaidyConfiguration $value): self
    {
        $this->instance->setPaidyConfiguration($value);
        return $this;
    }

    /**
     * Sets qr merchant configuration field.
     *
     * @param MerchantWebhookQrMerchantConfiguration|null $value
     */
    public function qrMerchantConfiguration(?MerchantWebhookQrMerchantConfiguration $value): self
    {
        $this->instance->setQrMerchantConfiguration($value);
        return $this;
    }

    /**
     * Sets online configuration field.
     *
     * @param MerchantWebhookOnlineConfiguration|null $value
     */
    public function onlineConfiguration(?MerchantWebhookOnlineConfiguration $value): self
    {
        $this->instance->setOnlineConfiguration($value);
        return $this;
    }

    /**
     * Sets bank transfer configuration field.
     *
     * @param MerchantWebhookBankTransferConfiguration|null $value
     */
    public function bankTransferConfiguration(?MerchantWebhookBankTransferConfiguration $value): self
    {
        $this->instance->setBankTransferConfiguration($value);
        return $this;
    }

    /**
     * Sets platform credentials enabled field.
     *
     * @param bool|null $value
     */
    public function platformCredentialsEnabled(?bool $value): self
    {
        $this->instance->setPlatformCredentialsEnabled($value);
        return $this;
    }

    /**
     * Unsets platform credentials enabled field.
     */
    public function unsetPlatformCredentialsEnabled(): self
    {
        $this->instance->unsetPlatformCredentialsEnabled();
        return $this;
    }

    /**
     * Sets tagged platform credentials enabled field.
     *
     * @param bool|null $value
     */
    public function taggedPlatformCredentialsEnabled(?bool $value): self
    {
        $this->instance->setTaggedPlatformCredentialsEnabled($value);
        return $this;
    }

    /**
     * Unsets tagged platform credentials enabled field.
     */
    public function unsetTaggedPlatformCredentialsEnabled(): self
    {
        $this->instance->unsetTaggedPlatformCredentialsEnabled();
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
     * Initializes a new Merchant Webhook Configuration object.
     */
    public function build(): MerchantWebhookConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
