
# Merchant Webhook Configuration

Merchant configuration object serialized by gyron-payments-api.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `percentFee` | `?float` | Optional | Default percent fee applied when no card-brand override exists. | getPercentFee(): ?float | setPercentFee(?float percentFee): void |
| `flatFees` | [`?(MerchantWebhookMoneyAmount[])`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Flat fee overrides by currency. | getFlatFees(): ?array | setFlatFees(?array flatFees): void |
| `logoUrl` | `?string` | Optional | Merchant logo URL. | getLogoUrl(): ?string | setLogoUrl(?string logoUrl): void |
| `country` | `?string` | Optional | Merchant country code. | getCountry(): ?string | setCountry(?string country): void |
| `language` | `?string` | Optional | Merchant default language. | getLanguage(): ?string | setLanguage(?string language): void |
| `displayTimeZone` | `?string` | Optional | Merchant display time zone. | getDisplayTimeZone(): ?string | setDisplayTimeZone(?string displayTimeZone): void |
| `minTransferPayout` | [`?MerchantWebhookMoneyAmount`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Monetary amount object serialized by backend config models. | getMinTransferPayout(): ?MerchantWebhookMoneyAmount | setMinTransferPayout(?MerchantWebhookMoneyAmount minTransferPayout): void |
| `minimumChargeAmounts` | [`?(MerchantWebhookMoneyAmount[])`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Minimum allowed charge amounts by currency. | getMinimumChargeAmounts(): ?array | setMinimumChargeAmounts(?array minimumChargeAmounts): void |
| `maximumChargeAmounts` | [`?(MerchantWebhookMoneyAmount[])`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Maximum allowed charge amounts by currency. | getMaximumChargeAmounts(): ?array | setMaximumChargeAmounts(?array maximumChargeAmounts): void |
| `transferSchedule` | [`?MerchantWebhookTransferScheduleConfiguration`](../../doc/models/merchant-webhook-transfer-schedule-configuration.md) | Optional | Transfer schedule configuration inherited by the merchant. | getTransferSchedule(): ?MerchantWebhookTransferScheduleConfiguration | setTransferSchedule(?MerchantWebhookTransferScheduleConfiguration transferSchedule): void |
| `userTransactionsConfiguration` | [`?MerchantWebhookUserTransactionsConfiguration`](../../doc/models/merchant-webhook-user-transactions-configuration.md) | Optional | Merchant transaction notification settings. | getUserTransactionsConfiguration(): ?MerchantWebhookUserTransactionsConfiguration | setUserTransactionsConfiguration(?MerchantWebhookUserTransactionsConfiguration userTransactionsConfiguration): void |
| `recurringTokenConfiguration` | [`?MerchantWebhookRecurringTokenConfiguration`](../../doc/models/merchant-webhook-recurring-token-configuration.md) | Optional | Recurring token configuration inherited by the merchant. | getRecurringTokenConfiguration(): ?MerchantWebhookRecurringTokenConfiguration | setRecurringTokenConfiguration(?MerchantWebhookRecurringTokenConfiguration recurringTokenConfiguration): void |
| `securityConfiguration` | [`?MerchantWebhookSecurityConfiguration`](../../doc/models/merchant-webhook-security-configuration.md) | Optional | Merchant-level fraud and refund safety settings. | getSecurityConfiguration(): ?MerchantWebhookSecurityConfiguration | setSecurityConfiguration(?MerchantWebhookSecurityConfiguration securityConfiguration): void |
| `checkoutConfiguration` | [`?MerchantWebhookCheckoutConfiguration`](../../doc/models/merchant-webhook-checkout-configuration.md) | Optional | Checkout field collection settings. | getCheckoutConfiguration(): ?MerchantWebhookCheckoutConfiguration | setCheckoutConfiguration(?MerchantWebhookCheckoutConfiguration checkoutConfiguration): void |
| `installmentsConfiguration` | [`?MerchantWebhookInstallmentPlanConfiguration`](../../doc/models/merchant-webhook-installment-plan-configuration.md) | Optional | Installment plan configuration. | getInstallmentsConfiguration(): ?MerchantWebhookInstallmentPlanConfiguration | setInstallmentsConfiguration(?MerchantWebhookInstallmentPlanConfiguration installmentsConfiguration): void |
| `subscriptionPlanConfiguration` | [`?MerchantWebhookSubscriptionPlanConfiguration`](../../doc/models/merchant-webhook-subscription-plan-configuration.md) | Optional | Subscription plan configuration. | getSubscriptionPlanConfiguration(): ?MerchantWebhookSubscriptionPlanConfiguration | setSubscriptionPlanConfiguration(?MerchantWebhookSubscriptionPlanConfiguration subscriptionPlanConfiguration): void |
| `cardBrandPercentFees` | [`?MerchantWebhookCardBrandPercentFees`](../../doc/models/merchant-webhook-card-brand-percent-fees.md) | Optional | Per-card-brand percent fee overrides. | getCardBrandPercentFees(): ?MerchantWebhookCardBrandPercentFees | setCardBrandPercentFees(?MerchantWebhookCardBrandPercentFees cardBrandPercentFees): void |
| `subscriptionConfiguration` | [`?MerchantWebhookSubscriptionConfiguration`](../../doc/models/merchant-webhook-subscription-configuration.md) | Optional | Subscription feature configuration. | getSubscriptionConfiguration(): ?MerchantWebhookSubscriptionConfiguration | setSubscriptionConfiguration(?MerchantWebhookSubscriptionConfiguration subscriptionConfiguration): void |
| `customerManagementConfiguration` | [`?MerchantWebhookCustomerManagementConfiguration`](../../doc/models/merchant-webhook-customer-management-configuration.md) | Optional | Customer-management defaults. | getCustomerManagementConfiguration(): ?MerchantWebhookCustomerManagementConfiguration | setCustomerManagementConfiguration(?MerchantWebhookCustomerManagementConfiguration customerManagementConfiguration): void |
| `descriptorProvidedConfiguration` | `?bool` | Optional | Whether statement descriptors can be provided by merchants. | getDescriptorProvidedConfiguration(): ?bool | setDescriptorProvidedConfiguration(?bool descriptorProvidedConfiguration): void |
| `cardConfiguration` | [`?MerchantWebhookCardConfiguration`](../../doc/models/merchant-webhook-card-configuration.md) | Optional | Card payment settings. | getCardConfiguration(): ?MerchantWebhookCardConfiguration | setCardConfiguration(?MerchantWebhookCardConfiguration cardConfiguration): void |
| `qrScanConfiguration` | [`?MerchantWebhookQrScanConfiguration`](../../doc/models/merchant-webhook-qr-scan-configuration.md) | Optional | QR scan payment settings. | getQrScanConfiguration(): ?MerchantWebhookQrScanConfiguration | setQrScanConfiguration(?MerchantWebhookQrScanConfiguration qrScanConfiguration): void |
| `convenienceConfiguration` | [`?MerchantWebhookConvenienceConfiguration`](../../doc/models/merchant-webhook-convenience-configuration.md) | Optional | Convenience-store payment settings. | getConvenienceConfiguration(): ?MerchantWebhookConvenienceConfiguration | setConvenienceConfiguration(?MerchantWebhookConvenienceConfiguration convenienceConfiguration): void |
| `paidyConfiguration` | [`?MerchantWebhookPaidyConfiguration`](../../doc/models/merchant-webhook-paidy-configuration.md) | Optional | Paidy payment settings. | getPaidyConfiguration(): ?MerchantWebhookPaidyConfiguration | setPaidyConfiguration(?MerchantWebhookPaidyConfiguration paidyConfiguration): void |
| `qrMerchantConfiguration` | [`?MerchantWebhookQrMerchantConfiguration`](../../doc/models/merchant-webhook-qr-merchant-configuration.md) | Optional | QR merchant payment settings. | getQrMerchantConfiguration(): ?MerchantWebhookQrMerchantConfiguration | setQrMerchantConfiguration(?MerchantWebhookQrMerchantConfiguration qrMerchantConfiguration): void |
| `onlineConfiguration` | [`?MerchantWebhookOnlineConfiguration`](../../doc/models/merchant-webhook-online-configuration.md) | Optional | Online payment settings. | getOnlineConfiguration(): ?MerchantWebhookOnlineConfiguration | setOnlineConfiguration(?MerchantWebhookOnlineConfiguration onlineConfiguration): void |
| `bankTransferConfiguration` | [`?MerchantWebhookBankTransferConfiguration`](../../doc/models/merchant-webhook-bank-transfer-configuration.md) | Optional | Bank transfer payment settings. | getBankTransferConfiguration(): ?MerchantWebhookBankTransferConfiguration | setBankTransferConfiguration(?MerchantWebhookBankTransferConfiguration bankTransferConfiguration): void |
| `platformCredentialsEnabled` | `?bool` | Optional | Whether platform credentials are enabled. | getPlatformCredentialsEnabled(): ?bool | setPlatformCredentialsEnabled(?bool platformCredentialsEnabled): void |
| `taggedPlatformCredentialsEnabled` | `?bool` | Optional | Whether tagged platform credentials are enabled. | getTaggedPlatformCredentialsEnabled(): ?bool | setTaggedPlatformCredentialsEnabled(?bool taggedPlatformCredentialsEnabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;
use UnivaPay\Models\Builders\MerchantWebhookTransferScheduleConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookUserTransactionsConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookRecurringTokenConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookRecurringCvvConfirmationConfigBuilder;
use UnivaPay\Models\Builders\MerchantWebhookSecurityConfigurationBuilder;
use UnivaPay\Models\Builders\RestrictIpAfterFailedChargeConfigBuilder;
use UnivaPay\Models\Builders\MerchantWebhookLimitRefundBySalesConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCheckoutConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCheckoutToggleBuilder;
use UnivaPay\Models\Builders\MerchantWebhookInstallmentPlanConfigurationBuilder;
use UnivaPay\Models\Builders\CardProcessorInstallmentConfigBuilder;
use UnivaPay\Models\Builders\MerchantWebhookSubscriptionPlanConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCardBrandPercentFeesBuilder;
use UnivaPay\Models\Builders\MerchantWebhookSubscriptionConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCustomerManagementConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookCardConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookQrScanConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookConvenienceConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookPaidyConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookQrMerchantConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookOnlineConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookBankTransferConfigurationBuilder;

$merchantWebhookConfiguration = MerchantWebhookConfigurationBuilder::init()
    ->percentFee(3.6)
    ->flatFees(
        [
            MerchantWebhookMoneyAmountBuilder::init()
                ->amount(100)
                ->currency('JPY')
                ->build()
        ]
    )
    ->country('JP')
    ->language('ja')
    ->displayTimeZone('Asia/Tokyo')
    ->minTransferPayout(
        MerchantWebhookMoneyAmountBuilder::init()
            ->amount(5000)
            ->currency('JPY')
            ->build()
    )
    ->minimumChargeAmounts(
        [
            MerchantWebhookMoneyAmountBuilder::init()
                ->amount(100)
                ->currency('JPY')
                ->build()
        ]
    )
    ->maximumChargeAmounts(
        [
            MerchantWebhookMoneyAmountBuilder::init()
                ->amount(100000)
                ->currency('JPY')
                ->build()
        ]
    )
    ->transferSchedule(
        MerchantWebhookTransferScheduleConfigurationBuilder::init()
            ->waitPeriod('P7D')
            ->period('weekly')
            ->fullPeriodRequired(false)
            ->weeklyClosingDay('sunday')
            ->weeklyPayoutDay('friday')
            ->build()
    )
    ->userTransactionsConfiguration(
        MerchantWebhookUserTransactionsConfigurationBuilder::init()
            ->enabled(true)
            ->notifyCustomer(true)
            ->notifyOnWebhookFailure(true)
            ->notifyOnWebhookDisabled(true)
            ->notifyOnSubscriptions(true)
            ->build()
    )
    ->recurringTokenConfiguration(
        MerchantWebhookRecurringTokenConfigurationBuilder::init()
            ->recurringType('infinite')
            ->chargeWaitPeriod('P7D')
            ->cardChargeCvvConfirmation(
                MerchantWebhookRecurringCvvConfirmationConfigBuilder::init()
                    ->enabled(false)
                    ->build()
            )
            ->build()
    )
    ->securityConfiguration(
        MerchantWebhookSecurityConfigurationBuilder::init()
            ->cardChargeCooldown('PT5M')
            ->subscriptionCooldown('PT10M')
            ->restrictIpAfterFailedCharge(
                RestrictIpAfterFailedChargeConfigBuilder::init()
                    ->enabled(true)
                    ->count(5)
                    ->cooldown('PT1H')
                    ->build()
            )
            ->refundPercentLimit(100)
            ->confirmationRequired(false)
            ->minRefundThreshold(100)
            ->limitRefundBySales(
                MerchantWebhookLimitRefundBySalesConfigurationBuilder::init()
                    ->enabled(true)
                    ->period('monthly')
                    ->rollingWindow(true)
                    ->build()
            )
            ->build()
    )
    ->checkoutConfiguration(
        MerchantWebhookCheckoutConfigurationBuilder::init()
            ->ecEmail(
                MerchantWebhookCheckoutToggleBuilder::init()
                    ->enabled(true)
                    ->build()
            )
            ->ecProducts(
                MerchantWebhookCheckoutToggleBuilder::init()
                    ->enabled(true)
                    ->build()
            )
            ->build()
    )
    ->installmentsConfiguration(
        MerchantWebhookInstallmentPlanConfigurationBuilder::init()
            ->enabled(true)
            ->cardProcessor(
                CardProcessorInstallmentConfigBuilder::init()
                    ->revolving(true)
                    ->fixedCycle(true)
                    ->build()
            )
            ->supportedPaymentTypes(
                [
                    'card'
                ]
            )
            ->minChargeAmount(
                MerchantWebhookMoneyAmountBuilder::init()
                    ->amount(3000)
                    ->currency('JPY')
                    ->build()
            )
            ->maxPayoutPeriod('P12M')
            ->onlyWithProcessor(true)
            ->build()
    )
    ->subscriptionPlanConfiguration(
        MerchantWebhookSubscriptionPlanConfigurationBuilder::init()
            ->enabled(true)
            ->fixedCycle(true)
            ->fixedCycleAmount(true)
            ->supportedPaymentTypes(
                [
                    'card'
                ]
            )
            ->minChargeAmount(
                MerchantWebhookMoneyAmountBuilder::init()
                    ->amount(3000)
                    ->currency('JPY')
                    ->build()
            )
            ->maxPayoutPeriod('P12M')
            ->build()
    )
    ->cardBrandPercentFees(
        MerchantWebhookCardBrandPercentFeesBuilder::init()
            ->visa(3.6)
            ->mastercard(3.6)
            ->jcb(3.8)
            ->build()
    )
    ->subscriptionConfiguration(
        MerchantWebhookSubscriptionConfigurationBuilder::init()
            ->enabled(true)
            ->failedChargesToCancel(3)
            ->suspendOnCancel(true)
            ->allowMerchantAmountPatch(false)
            ->allowMerchantDueDatePatch(false)
            ->build()
    )
    ->customerManagementConfiguration(
        MerchantWebhookCustomerManagementConfigurationBuilder::init()
            ->enabled(true)
            ->defaultRoles(
                [
                    'end_user'
                ]
            )
            ->defaultMode('live')
            ->build()
    )
    ->descriptorProvidedConfiguration(false)
    ->cardConfiguration(
        MerchantWebhookCardConfigurationBuilder::init()
            ->enabled(true)
            ->debitEnabled(true)
            ->prepaidEnabled(false)
            ->foreignCardsAllowed(false)
            ->threeDsRequired(true)
            ->allowDirectTokenCreation(false)
            ->build()
    )
    ->qrScanConfiguration(
        MerchantWebhookQrScanConfigurationBuilder::init()
            ->enabled(true)
            ->forbiddenQrScanGateways(
                [
                    'wechat'
                ]
            )
            ->build()
    )
    ->convenienceConfiguration(
        MerchantWebhookConvenienceConfigurationBuilder::init()
            ->enabled(true)
            ->expiration('P3D')
            ->build()
    )
    ->paidyConfiguration(
        MerchantWebhookPaidyConfigurationBuilder::init()
            ->enabled(false)
            ->build()
    )
    ->qrMerchantConfiguration(
        MerchantWebhookQrMerchantConfigurationBuilder::init()
            ->enabled(false)
            ->build()
    )
    ->onlineConfiguration(
        MerchantWebhookOnlineConfigurationBuilder::init()
            ->enabled(true)
            ->build()
    )
    ->bankTransferConfiguration(
        MerchantWebhookBankTransferConfigurationBuilder::init()
            ->enabled(true)
            ->matchAmount(true)
            ->expiration('P7D')
            ->virtualBankAccountsThreshold(50)
            ->virtualBankAccountsFetchCount(25)
            ->defaultExtensionPeriod('P3D')
            ->maximumExtensionPeriod('P30D')
            ->automaticExtensionEnabled(true)
            ->chargeRequestNotificationEnabled(true)
            ->depositReceivedNotificationEnabled(true)
            ->remindNotificationPeriod('P2D')
            ->remindNotificationEnabled(true)
            ->build()
    )
    ->platformCredentialsEnabled(true)
    ->taggedPlatformCredentialsEnabled(false)
    ->build();
```

