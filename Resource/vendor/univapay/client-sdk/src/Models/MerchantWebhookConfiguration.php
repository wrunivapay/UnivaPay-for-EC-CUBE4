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
use UnivaPay\Utils\NumberHelper;

/**
 * Merchant configuration object serialized by gyron-payments-api.
 */
class MerchantWebhookConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $percentFee = [];

    /**
     * @var MerchantWebhookMoneyAmount[]|null
     */
    private $flatFees;

    /**
     * @var array
     */
    private $logoUrl = [];

    /**
     * @var array
     */
    private $country = [];

    /**
     * @var array
     */
    private $language = [];

    /**
     * @var array
     */
    private $displayTimeZone = [];

    /**
     * @var MerchantWebhookMoneyAmount|null
     */
    private $minTransferPayout;

    /**
     * @var MerchantWebhookMoneyAmount[]|null
     */
    private $minimumChargeAmounts;

    /**
     * @var MerchantWebhookMoneyAmount[]|null
     */
    private $maximumChargeAmounts;

    /**
     * @var MerchantWebhookTransferScheduleConfiguration|null
     */
    private $transferSchedule;

    /**
     * @var MerchantWebhookUserTransactionsConfiguration|null
     */
    private $userTransactionsConfiguration;

    /**
     * @var MerchantWebhookRecurringTokenConfiguration|null
     */
    private $recurringTokenConfiguration;

    /**
     * @var MerchantWebhookSecurityConfiguration|null
     */
    private $securityConfiguration;

    /**
     * @var MerchantWebhookCheckoutConfiguration|null
     */
    private $checkoutConfiguration;

    /**
     * @var MerchantWebhookInstallmentPlanConfiguration|null
     */
    private $installmentsConfiguration;

    /**
     * @var MerchantWebhookSubscriptionPlanConfiguration|null
     */
    private $subscriptionPlanConfiguration;

    /**
     * @var MerchantWebhookCardBrandPercentFees|null
     */
    private $cardBrandPercentFees;

    /**
     * @var MerchantWebhookSubscriptionConfiguration|null
     */
    private $subscriptionConfiguration;

    /**
     * @var MerchantWebhookCustomerManagementConfiguration|null
     */
    private $customerManagementConfiguration;

    /**
     * @var array
     */
    private $descriptorProvidedConfiguration = [];

    /**
     * @var MerchantWebhookCardConfiguration|null
     */
    private $cardConfiguration;

    /**
     * @var MerchantWebhookQrScanConfiguration|null
     */
    private $qrScanConfiguration;

    /**
     * @var MerchantWebhookConvenienceConfiguration|null
     */
    private $convenienceConfiguration;

    /**
     * @var MerchantWebhookPaidyConfiguration|null
     */
    private $paidyConfiguration;

    /**
     * @var MerchantWebhookQrMerchantConfiguration|null
     */
    private $qrMerchantConfiguration;

    /**
     * @var MerchantWebhookOnlineConfiguration|null
     */
    private $onlineConfiguration;

    /**
     * @var MerchantWebhookBankTransferConfiguration|null
     */
    private $bankTransferConfiguration;

    /**
     * @var array
     */
    private $platformCredentialsEnabled = [];

    /**
     * @var array
     */
    private $taggedPlatformCredentialsEnabled = [];

    /**
     * Returns Percent Fee.
     * Default percent fee applied when no card-brand override exists.
     */
    public function getPercentFee(): ?float
    {
        if (count($this->percentFee) == 0) {
            return null;
        }
        return $this->percentFee['value'];
    }

    /**
     * Sets Percent Fee.
     * Default percent fee applied when no card-brand override exists.
     *
     * @maps percent_fee
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setPercentFee(?float $percentFee): void
    {
        $this->percentFee['value'] = $percentFee;
    }

    /**
     * Unsets Percent Fee.
     * Default percent fee applied when no card-brand override exists.
     */
    public function unsetPercentFee(): void
    {
        $this->percentFee = [];
    }

    /**
     * Returns Flat Fees.
     * Flat fee overrides by currency.
     *
     * @return MerchantWebhookMoneyAmount[]|null
     */
    public function getFlatFees(): ?array
    {
        return $this->flatFees;
    }

    /**
     * Sets Flat Fees.
     * Flat fee overrides by currency.
     *
     * @maps flat_fees
     *
     * @param MerchantWebhookMoneyAmount[]|null $flatFees
     */
    public function setFlatFees(?array $flatFees): void
    {
        $this->flatFees = $flatFees;
    }

    /**
     * Returns Logo Url.
     * Merchant logo URL.
     */
    public function getLogoUrl(): ?string
    {
        if (count($this->logoUrl) == 0) {
            return null;
        }
        return $this->logoUrl['value'];
    }

    /**
     * Sets Logo Url.
     * Merchant logo URL.
     *
     * @maps logo_url
     */
    public function setLogoUrl(?string $logoUrl): void
    {
        $this->logoUrl['value'] = $logoUrl;
    }

    /**
     * Unsets Logo Url.
     * Merchant logo URL.
     */
    public function unsetLogoUrl(): void
    {
        $this->logoUrl = [];
    }

    /**
     * Returns Country.
     * Merchant country code.
     */
    public function getCountry(): ?string
    {
        if (count($this->country) == 0) {
            return null;
        }
        return $this->country['value'];
    }

    /**
     * Sets Country.
     * Merchant country code.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country['value'] = $country;
    }

    /**
     * Unsets Country.
     * Merchant country code.
     */
    public function unsetCountry(): void
    {
        $this->country = [];
    }

    /**
     * Returns Language.
     * Merchant default language.
     */
    public function getLanguage(): ?string
    {
        if (count($this->language) == 0) {
            return null;
        }
        return $this->language['value'];
    }

    /**
     * Sets Language.
     * Merchant default language.
     *
     * @maps language
     */
    public function setLanguage(?string $language): void
    {
        $this->language['value'] = $language;
    }

    /**
     * Unsets Language.
     * Merchant default language.
     */
    public function unsetLanguage(): void
    {
        $this->language = [];
    }

    /**
     * Returns Display Time Zone.
     * Merchant display time zone.
     */
    public function getDisplayTimeZone(): ?string
    {
        if (count($this->displayTimeZone) == 0) {
            return null;
        }
        return $this->displayTimeZone['value'];
    }

    /**
     * Sets Display Time Zone.
     * Merchant display time zone.
     *
     * @maps display_time_zone
     */
    public function setDisplayTimeZone(?string $displayTimeZone): void
    {
        $this->displayTimeZone['value'] = $displayTimeZone;
    }

    /**
     * Unsets Display Time Zone.
     * Merchant display time zone.
     */
    public function unsetDisplayTimeZone(): void
    {
        $this->displayTimeZone = [];
    }

    /**
     * Returns Min Transfer Payout.
     * Monetary amount object serialized by backend config models.
     */
    public function getMinTransferPayout(): ?MerchantWebhookMoneyAmount
    {
        return $this->minTransferPayout;
    }

    /**
     * Sets Min Transfer Payout.
     * Monetary amount object serialized by backend config models.
     *
     * @maps min_transfer_payout
     */
    public function setMinTransferPayout(?MerchantWebhookMoneyAmount $minTransferPayout): void
    {
        $this->minTransferPayout = $minTransferPayout;
    }

    /**
     * Returns Minimum Charge Amounts.
     * Minimum allowed charge amounts by currency.
     *
     * @return MerchantWebhookMoneyAmount[]|null
     */
    public function getMinimumChargeAmounts(): ?array
    {
        return $this->minimumChargeAmounts;
    }

    /**
     * Sets Minimum Charge Amounts.
     * Minimum allowed charge amounts by currency.
     *
     * @maps minimum_charge_amounts
     *
     * @param MerchantWebhookMoneyAmount[]|null $minimumChargeAmounts
     */
    public function setMinimumChargeAmounts(?array $minimumChargeAmounts): void
    {
        $this->minimumChargeAmounts = $minimumChargeAmounts;
    }

    /**
     * Returns Maximum Charge Amounts.
     * Maximum allowed charge amounts by currency.
     *
     * @return MerchantWebhookMoneyAmount[]|null
     */
    public function getMaximumChargeAmounts(): ?array
    {
        return $this->maximumChargeAmounts;
    }

    /**
     * Sets Maximum Charge Amounts.
     * Maximum allowed charge amounts by currency.
     *
     * @maps maximum_charge_amounts
     *
     * @param MerchantWebhookMoneyAmount[]|null $maximumChargeAmounts
     */
    public function setMaximumChargeAmounts(?array $maximumChargeAmounts): void
    {
        $this->maximumChargeAmounts = $maximumChargeAmounts;
    }

    /**
     * Returns Transfer Schedule.
     * Transfer schedule configuration inherited by the merchant.
     */
    public function getTransferSchedule(): ?MerchantWebhookTransferScheduleConfiguration
    {
        return $this->transferSchedule;
    }

    /**
     * Sets Transfer Schedule.
     * Transfer schedule configuration inherited by the merchant.
     *
     * @maps transfer_schedule
     */
    public function setTransferSchedule(?MerchantWebhookTransferScheduleConfiguration $transferSchedule): void
    {
        $this->transferSchedule = $transferSchedule;
    }

    /**
     * Returns User Transactions Configuration.
     * Merchant transaction notification settings.
     */
    public function getUserTransactionsConfiguration(): ?MerchantWebhookUserTransactionsConfiguration
    {
        return $this->userTransactionsConfiguration;
    }

    /**
     * Sets User Transactions Configuration.
     * Merchant transaction notification settings.
     *
     * @maps user_transactions_configuration
     */
    public function setUserTransactionsConfiguration(
        ?MerchantWebhookUserTransactionsConfiguration $userTransactionsConfiguration
    ): void {
        $this->userTransactionsConfiguration = $userTransactionsConfiguration;
    }

    /**
     * Returns Recurring Token Configuration.
     * Recurring token configuration inherited by the merchant.
     */
    public function getRecurringTokenConfiguration(): ?MerchantWebhookRecurringTokenConfiguration
    {
        return $this->recurringTokenConfiguration;
    }

    /**
     * Sets Recurring Token Configuration.
     * Recurring token configuration inherited by the merchant.
     *
     * @maps recurring_token_configuration
     */
    public function setRecurringTokenConfiguration(
        ?MerchantWebhookRecurringTokenConfiguration $recurringTokenConfiguration
    ): void {
        $this->recurringTokenConfiguration = $recurringTokenConfiguration;
    }

    /**
     * Returns Security Configuration.
     * Merchant-level fraud and refund safety settings.
     */
    public function getSecurityConfiguration(): ?MerchantWebhookSecurityConfiguration
    {
        return $this->securityConfiguration;
    }

    /**
     * Sets Security Configuration.
     * Merchant-level fraud and refund safety settings.
     *
     * @maps security_configuration
     */
    public function setSecurityConfiguration(?MerchantWebhookSecurityConfiguration $securityConfiguration): void
    {
        $this->securityConfiguration = $securityConfiguration;
    }

    /**
     * Returns Checkout Configuration.
     * Checkout field collection settings.
     */
    public function getCheckoutConfiguration(): ?MerchantWebhookCheckoutConfiguration
    {
        return $this->checkoutConfiguration;
    }

    /**
     * Sets Checkout Configuration.
     * Checkout field collection settings.
     *
     * @maps checkout_configuration
     */
    public function setCheckoutConfiguration(?MerchantWebhookCheckoutConfiguration $checkoutConfiguration): void
    {
        $this->checkoutConfiguration = $checkoutConfiguration;
    }

    /**
     * Returns Installments Configuration.
     * Installment plan configuration.
     */
    public function getInstallmentsConfiguration(): ?MerchantWebhookInstallmentPlanConfiguration
    {
        return $this->installmentsConfiguration;
    }

    /**
     * Sets Installments Configuration.
     * Installment plan configuration.
     *
     * @maps installments_configuration
     */
    public function setInstallmentsConfiguration(
        ?MerchantWebhookInstallmentPlanConfiguration $installmentsConfiguration
    ): void {
        $this->installmentsConfiguration = $installmentsConfiguration;
    }

    /**
     * Returns Subscription Plan Configuration.
     * Subscription plan configuration.
     */
    public function getSubscriptionPlanConfiguration(): ?MerchantWebhookSubscriptionPlanConfiguration
    {
        return $this->subscriptionPlanConfiguration;
    }

    /**
     * Sets Subscription Plan Configuration.
     * Subscription plan configuration.
     *
     * @maps subscription_plan_configuration
     */
    public function setSubscriptionPlanConfiguration(
        ?MerchantWebhookSubscriptionPlanConfiguration $subscriptionPlanConfiguration
    ): void {
        $this->subscriptionPlanConfiguration = $subscriptionPlanConfiguration;
    }

    /**
     * Returns Card Brand Percent Fees.
     * Per-card-brand percent fee overrides.
     */
    public function getCardBrandPercentFees(): ?MerchantWebhookCardBrandPercentFees
    {
        return $this->cardBrandPercentFees;
    }

    /**
     * Sets Card Brand Percent Fees.
     * Per-card-brand percent fee overrides.
     *
     * @maps card_brand_percent_fees
     */
    public function setCardBrandPercentFees(?MerchantWebhookCardBrandPercentFees $cardBrandPercentFees): void
    {
        $this->cardBrandPercentFees = $cardBrandPercentFees;
    }

    /**
     * Returns Subscription Configuration.
     * Subscription feature configuration.
     */
    public function getSubscriptionConfiguration(): ?MerchantWebhookSubscriptionConfiguration
    {
        return $this->subscriptionConfiguration;
    }

    /**
     * Sets Subscription Configuration.
     * Subscription feature configuration.
     *
     * @maps subscription_configuration
     */
    public function setSubscriptionConfiguration(
        ?MerchantWebhookSubscriptionConfiguration $subscriptionConfiguration
    ): void {
        $this->subscriptionConfiguration = $subscriptionConfiguration;
    }

    /**
     * Returns Customer Management Configuration.
     * Customer-management defaults.
     */
    public function getCustomerManagementConfiguration(): ?MerchantWebhookCustomerManagementConfiguration
    {
        return $this->customerManagementConfiguration;
    }

    /**
     * Sets Customer Management Configuration.
     * Customer-management defaults.
     *
     * @maps customer_management_configuration
     */
    public function setCustomerManagementConfiguration(
        ?MerchantWebhookCustomerManagementConfiguration $customerManagementConfiguration
    ): void {
        $this->customerManagementConfiguration = $customerManagementConfiguration;
    }

    /**
     * Returns Descriptor Provided Configuration.
     * Whether statement descriptors can be provided by merchants.
     */
    public function getDescriptorProvidedConfiguration(): ?bool
    {
        if (count($this->descriptorProvidedConfiguration) == 0) {
            return null;
        }
        return $this->descriptorProvidedConfiguration['value'];
    }

    /**
     * Sets Descriptor Provided Configuration.
     * Whether statement descriptors can be provided by merchants.
     *
     * @maps descriptor_provided_configuration
     */
    public function setDescriptorProvidedConfiguration(?bool $descriptorProvidedConfiguration): void
    {
        $this->descriptorProvidedConfiguration['value'] = $descriptorProvidedConfiguration;
    }

    /**
     * Unsets Descriptor Provided Configuration.
     * Whether statement descriptors can be provided by merchants.
     */
    public function unsetDescriptorProvidedConfiguration(): void
    {
        $this->descriptorProvidedConfiguration = [];
    }

    /**
     * Returns Card Configuration.
     * Card payment settings.
     */
    public function getCardConfiguration(): ?MerchantWebhookCardConfiguration
    {
        return $this->cardConfiguration;
    }

    /**
     * Sets Card Configuration.
     * Card payment settings.
     *
     * @maps card_configuration
     */
    public function setCardConfiguration(?MerchantWebhookCardConfiguration $cardConfiguration): void
    {
        $this->cardConfiguration = $cardConfiguration;
    }

    /**
     * Returns Qr Scan Configuration.
     * QR scan payment settings.
     */
    public function getQrScanConfiguration(): ?MerchantWebhookQrScanConfiguration
    {
        return $this->qrScanConfiguration;
    }

    /**
     * Sets Qr Scan Configuration.
     * QR scan payment settings.
     *
     * @maps qr_scan_configuration
     */
    public function setQrScanConfiguration(?MerchantWebhookQrScanConfiguration $qrScanConfiguration): void
    {
        $this->qrScanConfiguration = $qrScanConfiguration;
    }

    /**
     * Returns Convenience Configuration.
     * Convenience-store payment settings.
     */
    public function getConvenienceConfiguration(): ?MerchantWebhookConvenienceConfiguration
    {
        return $this->convenienceConfiguration;
    }

    /**
     * Sets Convenience Configuration.
     * Convenience-store payment settings.
     *
     * @maps convenience_configuration
     */
    public function setConvenienceConfiguration(
        ?MerchantWebhookConvenienceConfiguration $convenienceConfiguration
    ): void {
        $this->convenienceConfiguration = $convenienceConfiguration;
    }

    /**
     * Returns Paidy Configuration.
     * Paidy payment settings.
     */
    public function getPaidyConfiguration(): ?MerchantWebhookPaidyConfiguration
    {
        return $this->paidyConfiguration;
    }

    /**
     * Sets Paidy Configuration.
     * Paidy payment settings.
     *
     * @maps paidy_configuration
     */
    public function setPaidyConfiguration(?MerchantWebhookPaidyConfiguration $paidyConfiguration): void
    {
        $this->paidyConfiguration = $paidyConfiguration;
    }

    /**
     * Returns Qr Merchant Configuration.
     * QR merchant payment settings.
     */
    public function getQrMerchantConfiguration(): ?MerchantWebhookQrMerchantConfiguration
    {
        return $this->qrMerchantConfiguration;
    }

    /**
     * Sets Qr Merchant Configuration.
     * QR merchant payment settings.
     *
     * @maps qr_merchant_configuration
     */
    public function setQrMerchantConfiguration(?MerchantWebhookQrMerchantConfiguration $qrMerchantConfiguration): void
    {
        $this->qrMerchantConfiguration = $qrMerchantConfiguration;
    }

    /**
     * Returns Online Configuration.
     * Online payment settings.
     */
    public function getOnlineConfiguration(): ?MerchantWebhookOnlineConfiguration
    {
        return $this->onlineConfiguration;
    }

    /**
     * Sets Online Configuration.
     * Online payment settings.
     *
     * @maps online_configuration
     */
    public function setOnlineConfiguration(?MerchantWebhookOnlineConfiguration $onlineConfiguration): void
    {
        $this->onlineConfiguration = $onlineConfiguration;
    }

    /**
     * Returns Bank Transfer Configuration.
     * Bank transfer payment settings.
     */
    public function getBankTransferConfiguration(): ?MerchantWebhookBankTransferConfiguration
    {
        return $this->bankTransferConfiguration;
    }

    /**
     * Sets Bank Transfer Configuration.
     * Bank transfer payment settings.
     *
     * @maps bank_transfer_configuration
     */
    public function setBankTransferConfiguration(
        ?MerchantWebhookBankTransferConfiguration $bankTransferConfiguration
    ): void {
        $this->bankTransferConfiguration = $bankTransferConfiguration;
    }

    /**
     * Returns Platform Credentials Enabled.
     * Whether platform credentials are enabled.
     */
    public function getPlatformCredentialsEnabled(): ?bool
    {
        if (count($this->platformCredentialsEnabled) == 0) {
            return null;
        }
        return $this->platformCredentialsEnabled['value'];
    }

    /**
     * Sets Platform Credentials Enabled.
     * Whether platform credentials are enabled.
     *
     * @maps platform_credentials_enabled
     */
    public function setPlatformCredentialsEnabled(?bool $platformCredentialsEnabled): void
    {
        $this->platformCredentialsEnabled['value'] = $platformCredentialsEnabled;
    }

    /**
     * Unsets Platform Credentials Enabled.
     * Whether platform credentials are enabled.
     */
    public function unsetPlatformCredentialsEnabled(): void
    {
        $this->platformCredentialsEnabled = [];
    }

    /**
     * Returns Tagged Platform Credentials Enabled.
     * Whether tagged platform credentials are enabled.
     */
    public function getTaggedPlatformCredentialsEnabled(): ?bool
    {
        if (count($this->taggedPlatformCredentialsEnabled) == 0) {
            return null;
        }
        return $this->taggedPlatformCredentialsEnabled['value'];
    }

    /**
     * Sets Tagged Platform Credentials Enabled.
     * Whether tagged platform credentials are enabled.
     *
     * @maps tagged_platform_credentials_enabled
     */
    public function setTaggedPlatformCredentialsEnabled(?bool $taggedPlatformCredentialsEnabled): void
    {
        $this->taggedPlatformCredentialsEnabled['value'] = $taggedPlatformCredentialsEnabled;
    }

    /**
     * Unsets Tagged Platform Credentials Enabled.
     * Whether tagged platform credentials are enabled.
     */
    public function unsetTaggedPlatformCredentialsEnabled(): void
    {
        $this->taggedPlatformCredentialsEnabled = [];
    }

    /**
     * Converts the MerchantWebhookConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the MerchantWebhookConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookConfiguration',
            [
                'percentFee' => $this->getPercentFee(),
                'flatFees' => $this->flatFees,
                'logoUrl' => $this->getLogoUrl(),
                'country' => $this->getCountry(),
                'language' => $this->getLanguage(),
                'displayTimeZone' => $this->getDisplayTimeZone(),
                'minTransferPayout' => $this->minTransferPayout,
                'minimumChargeAmounts' => $this->minimumChargeAmounts,
                'maximumChargeAmounts' => $this->maximumChargeAmounts,
                'transferSchedule' => $this->transferSchedule,
                'userTransactionsConfiguration' => $this->userTransactionsConfiguration,
                'recurringTokenConfiguration' => $this->recurringTokenConfiguration,
                'securityConfiguration' => $this->securityConfiguration,
                'checkoutConfiguration' => $this->checkoutConfiguration,
                'installmentsConfiguration' => $this->installmentsConfiguration,
                'subscriptionPlanConfiguration' => $this->subscriptionPlanConfiguration,
                'cardBrandPercentFees' => $this->cardBrandPercentFees,
                'subscriptionConfiguration' => $this->subscriptionConfiguration,
                'customerManagementConfiguration' => $this->customerManagementConfiguration,
                'descriptorProvidedConfiguration' => $this->getDescriptorProvidedConfiguration(),
                'cardConfiguration' => $this->cardConfiguration,
                'qrScanConfiguration' => $this->qrScanConfiguration,
                'convenienceConfiguration' => $this->convenienceConfiguration,
                'paidyConfiguration' => $this->paidyConfiguration,
                'qrMerchantConfiguration' => $this->qrMerchantConfiguration,
                'onlineConfiguration' => $this->onlineConfiguration,
                'bankTransferConfiguration' => $this->bankTransferConfiguration,
                'platformCredentialsEnabled' => $this->getPlatformCredentialsEnabled(),
                'taggedPlatformCredentialsEnabled' => $this->getTaggedPlatformCredentialsEnabled(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'percent_fee',
        'flat_fees',
        'logo_url',
        'country',
        'language',
        'display_time_zone',
        'min_transfer_payout',
        'minimum_charge_amounts',
        'maximum_charge_amounts',
        'transfer_schedule',
        'user_transactions_configuration',
        'recurring_token_configuration',
        'security_configuration',
        'checkout_configuration',
        'installments_configuration',
        'subscription_plan_configuration',
        'card_brand_percent_fees',
        'subscription_configuration',
        'customer_management_configuration',
        'descriptor_provided_configuration',
        'card_configuration',
        'qr_scan_configuration',
        'convenience_configuration',
        'paidy_configuration',
        'qr_merchant_configuration',
        'online_configuration',
        'bank_transfer_configuration',
        'platform_credentials_enabled',
        'tagged_platform_credentials_enabled'
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
        if (!empty($this->percentFee)) {
            $json['percent_fee']                         = $this->percentFee['value'];
        }
        if (isset($this->flatFees)) {
            $json['flat_fees']                           = $this->flatFees;
        }
        if (!empty($this->logoUrl)) {
            $json['logo_url']                            = $this->logoUrl['value'];
        }
        if (!empty($this->country)) {
            $json['country']                             = $this->country['value'];
        }
        if (!empty($this->language)) {
            $json['language']                            = $this->language['value'];
        }
        if (!empty($this->displayTimeZone)) {
            $json['display_time_zone']                   = $this->displayTimeZone['value'];
        }
        if (isset($this->minTransferPayout)) {
            $json['min_transfer_payout']                 = $this->minTransferPayout;
        }
        if (isset($this->minimumChargeAmounts)) {
            $json['minimum_charge_amounts']              = $this->minimumChargeAmounts;
        }
        if (isset($this->maximumChargeAmounts)) {
            $json['maximum_charge_amounts']              = $this->maximumChargeAmounts;
        }
        if (isset($this->transferSchedule)) {
            $json['transfer_schedule']                   = $this->transferSchedule;
        }
        if (isset($this->userTransactionsConfiguration)) {
            $json['user_transactions_configuration']     = $this->userTransactionsConfiguration;
        }
        if (isset($this->recurringTokenConfiguration)) {
            $json['recurring_token_configuration']       = $this->recurringTokenConfiguration;
        }
        if (isset($this->securityConfiguration)) {
            $json['security_configuration']              = $this->securityConfiguration;
        }
        if (isset($this->checkoutConfiguration)) {
            $json['checkout_configuration']              = $this->checkoutConfiguration;
        }
        if (isset($this->installmentsConfiguration)) {
            $json['installments_configuration']          = $this->installmentsConfiguration;
        }
        if (isset($this->subscriptionPlanConfiguration)) {
            $json['subscription_plan_configuration']     = $this->subscriptionPlanConfiguration;
        }
        if (isset($this->cardBrandPercentFees)) {
            $json['card_brand_percent_fees']             = $this->cardBrandPercentFees;
        }
        if (isset($this->subscriptionConfiguration)) {
            $json['subscription_configuration']          = $this->subscriptionConfiguration;
        }
        if (isset($this->customerManagementConfiguration)) {
            $json['customer_management_configuration']   = $this->customerManagementConfiguration;
        }
        if (!empty($this->descriptorProvidedConfiguration)) {
            $json['descriptor_provided_configuration']   = $this->descriptorProvidedConfiguration['value'];
        }
        if (isset($this->cardConfiguration)) {
            $json['card_configuration']                  = $this->cardConfiguration;
        }
        if (isset($this->qrScanConfiguration)) {
            $json['qr_scan_configuration']               = $this->qrScanConfiguration;
        }
        if (isset($this->convenienceConfiguration)) {
            $json['convenience_configuration']           = $this->convenienceConfiguration;
        }
        if (isset($this->paidyConfiguration)) {
            $json['paidy_configuration']                 = $this->paidyConfiguration;
        }
        if (isset($this->qrMerchantConfiguration)) {
            $json['qr_merchant_configuration']           = $this->qrMerchantConfiguration;
        }
        if (isset($this->onlineConfiguration)) {
            $json['online_configuration']                = $this->onlineConfiguration;
        }
        if (isset($this->bankTransferConfiguration)) {
            $json['bank_transfer_configuration']         = $this->bankTransferConfiguration;
        }
        if (!empty($this->platformCredentialsEnabled)) {
            $json['platform_credentials_enabled']        = $this->platformCredentialsEnabled['value'];
        }
        if (!empty($this->taggedPlatformCredentialsEnabled)) {
            $json['tagged_platform_credentials_enabled'] = $this->taggedPlatformCredentialsEnabled['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
