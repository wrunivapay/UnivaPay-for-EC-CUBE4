
# Checkout Info

Merchant/store checkout configuration: enabled payment methods and their limits, installment/subscription plan settings, convenience-store and bank-transfer settings, widget theme, and per-brand feature support. Returned in full on every call — there is no partial-update or list variant.

*This model accepts additional fields of type array.*

## Structure

`CheckoutInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mode` | [`?string(CheckoutMode)`](../../doc/models/checkout-mode.md) | Optional | Store processing mode reflected in the checkout configuration: `live` and `test` reflect the credential used to authenticate, while `live_test` is reserved for privileged callers testing against live-mode data. | getMode(): ?string | setMode(?string mode): void |
| `recurringTokenPrivilege` | [`?string(CheckoutRecurringTokenPrivilege)`](../../doc/models/checkout-recurring-token-privilege.md) | Optional | Level of recurring-charge privilege granted to transaction tokens created under this store: `none` disallows recurring use, `bounded` allows a limited number of recurring charges, and `infinite` allows unlimited recurring charges. | getRecurringTokenPrivilege(): ?string | setRecurringTokenPrivilege(?string recurringTokenPrivilege): void |
| `name` | `?string` | Optional | Store display name. | getName(): ?string | setName(?string name): void |
| `cardConfiguration` | [`?CheckoutCardConfiguration`](../../doc/models/checkout-card-configuration.md) | Optional | Card payment settings applied to checkout. | getCardConfiguration(): ?CheckoutCardConfiguration | setCardConfiguration(?CheckoutCardConfiguration cardConfiguration): void |
| `subscriptionConfiguration` | [`?CheckoutSubscriptionConfiguration`](../../doc/models/checkout-subscription-configuration.md) | Optional | Univapay-hosted subscription feature toggle. | getSubscriptionConfiguration(): ?CheckoutSubscriptionConfiguration | setSubscriptionConfiguration(?CheckoutSubscriptionConfiguration subscriptionConfiguration): void |
| `installmentsConfiguration` | [`?CheckoutInstallmentsConfiguration`](../../doc/models/checkout-installments-configuration.md) | Optional | Installment plan configuration applied to checkout. | getInstallmentsConfiguration(): ?CheckoutInstallmentsConfiguration | setInstallmentsConfiguration(?CheckoutInstallmentsConfiguration installmentsConfiguration): void |
| `subscriptionPlanConfiguration` | [`?CheckoutSubscriptionPlanConfiguration`](../../doc/models/checkout-subscription-plan-configuration.md) | Optional | Univapay-side subscription plan configuration applied to checkout. | getSubscriptionPlanConfiguration(): ?CheckoutSubscriptionPlanConfiguration | setSubscriptionPlanConfiguration(?CheckoutSubscriptionPlanConfiguration subscriptionPlanConfiguration): void |
| `checkoutConfiguration` | [`?CheckoutEcConfiguration`](../../doc/models/checkout-ec-configuration.md) | Optional | EC checkout feature toggles for hosted email receipts and product line items. | getCheckoutConfiguration(): ?CheckoutEcConfiguration | setCheckoutConfiguration(?CheckoutEcConfiguration checkoutConfiguration): void |
| `qrScanConfiguration` | [`?CheckoutQrScanConfiguration`](../../doc/models/checkout-qr-scan-configuration.md) | Optional | QR-scan (CPM) payment settings applied to checkout. | getQrScanConfiguration(): ?CheckoutQrScanConfiguration | setQrScanConfiguration(?CheckoutQrScanConfiguration qrScanConfiguration): void |
| `convenienceConfiguration` | [`?CheckoutConvenienceConfiguration`](../../doc/models/checkout-convenience-configuration.md) | Optional | Convenience-store (konbini) payment settings applied to checkout. | getConvenienceConfiguration(): ?CheckoutConvenienceConfiguration | setConvenienceConfiguration(?CheckoutConvenienceConfiguration convenienceConfiguration): void |
| `paidyConfiguration` | [`?CheckoutPaidyConfiguration`](../../doc/models/checkout-paidy-configuration.md) | Optional | Paidy payment feature toggle. | getPaidyConfiguration(): ?CheckoutPaidyConfiguration | setPaidyConfiguration(?CheckoutPaidyConfiguration paidyConfiguration): void |
| `paidyPublicKey` | `?string` | Optional | Public key used to initialize the Paidy widget. `null` when Paidy is not configured for this store. | getPaidyPublicKey(): ?string | setPaidyPublicKey(?string paidyPublicKey): void |
| `logoImage` | `?string` | Optional | URL of the store's checkout logo image. `null` when no logo is configured. Note: this response field is `logo_image`, but the corresponding store-configuration update field is `logo_url` — the two names do not round-trip automatically. | getLogoImage(): ?string | setLogoImage(?string logoImage): void |
| `theme` | [`?CheckoutTheme`](../../doc/models/checkout-theme.md) | Optional | Widget theme applied to checkout. | getTheme(): ?CheckoutTheme | setTheme(?CheckoutTheme theme): void |
| `recurringCardChargeCvvConfirmation` | [`?RecurringCvvConfirmation`](../../doc/models/recurring-cvv-confirmation.md) | Optional | CVV re-confirmation policy applied to recurring card charges (subscriptions and tokens with recurring privilege). | getRecurringCardChargeCvvConfirmation(): ?RecurringCvvConfirmation | setRecurringCardChargeCvvConfirmation(?RecurringCvvConfirmation recurringCardChargeCvvConfirmation): void |
| `onlineConfiguration` | [`?CheckoutOnlineConfiguration`](../../doc/models/checkout-online-configuration.md) | Optional | Online redirect/wallet payment feature toggle. | getOnlineConfiguration(): ?CheckoutOnlineConfiguration | setOnlineConfiguration(?CheckoutOnlineConfiguration onlineConfiguration): void |
| `bankTransferConfiguration` | [`?CheckoutBankTransferConfiguration`](../../doc/models/checkout-bank-transfer-configuration.md) | Optional | Bank transfer (振込) payment settings applied to checkout. | getBankTransferConfiguration(): ?CheckoutBankTransferConfiguration | setBankTransferConfiguration(?CheckoutBankTransferConfiguration bankTransferConfiguration): void |
| `supportedBrands` | [`?(CheckoutSupportedBrand[])`](../../doc/models/checkout-supported-brand.md) | Optional | Feature support and capability flags for every payment-type / brand combination the store can accept. | getSupportedBrands(): ?array | setSupportedBrands(?array supportedBrands): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutInfoBuilder;
use UnivaPay\Models\CheckoutMode;
use UnivaPay\Models\CheckoutRecurringTokenPrivilege;
use UnivaPay\Models\Builders\CheckoutCardConfigurationBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\CheckoutSubscriptionConfigurationBuilder;
use UnivaPay\Models\CheckoutPaymentType;
use UnivaPay\Models\Builders\CheckoutSupportedBrandBuilder;

$checkoutInfo = CheckoutInfoBuilder::init()
    ->mode(CheckoutMode::TEST)
    ->recurringTokenPrivilege(CheckoutRecurringTokenPrivilege::NONE)
    ->name('Test store')
    ->cardConfiguration(
        CheckoutCardConfigurationBuilder::init()
            ->enabled(false)
            ->debitEnabled(false)
            ->prepaidEnabled(false)
            ->debitAuthorizationEnabled(false)
            ->prepaidAuthorizationEnabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->subscriptionConfiguration(
        CheckoutSubscriptionConfigurationBuilder::init()
            ->enabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->supportedBrands(
        [
            CheckoutSupportedBrandBuilder::init()
                ->paymentType(CheckoutPaymentType::CARD)
                ->brand('visa')
                ->cardBrand('visa')
                ->qrBrand('qr_brand4')
                ->onlineBrand('online_brand2')
                ->dynamicInfo(false)
                ->supportAuthCapture(true)
                ->requiresFullName(false)
                ->requiresCvv(true)
                ->countriesAllowed(
                    null
                )
                ->supportedCurrencies(
                    null
                )
                ->cvvAuth(false)
                ->installmentCapable(true)
                ->mcpCapable(false)
                ->mcpOnly(false)
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            CheckoutSupportedBrandBuilder::init()
                ->paymentType(CheckoutPaymentType::QR_MERCHANT)
                ->brand('alipay_merchant_qr')
                ->cardBrand('card_brand4')
                ->qrBrand('alipay_merchant_qr')
                ->onlineBrand('online_brand2')
                ->dynamicInfo(false)
                ->supportAuthCapture(false)
                ->requiresFullName(false)
                ->requiresCvv(false)
                ->countriesAllowed(
                    null
                )
                ->supportedCurrencies(
                    null
                )
                ->cvvAuth(false)
                ->installmentCapable(false)
                ->mcpCapable(false)
                ->mcpOnly(false)
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

