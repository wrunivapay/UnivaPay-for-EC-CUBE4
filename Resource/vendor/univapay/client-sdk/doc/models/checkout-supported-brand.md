
# Checkout Supported Brand

Feature support and capability flags for a single payment-type / brand combination the store can accept.

*This model accepts additional fields of type array.*

## Structure

`CheckoutSupportedBrand`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentType` | [`?string(CheckoutPaymentType)`](../../doc/models/checkout-payment-type.md) | Optional | Payment type identifier used throughout the checkout configuration. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `brand` | `?string` | Optional | Brand identifier for `payment_type`. For `card` and `apple_pay`, one of the common `CardBrand` values (`visa`, `mastercard`, `american_express`, `maestro`, `discover`, `jcb`, `diners_club`, `private_label`, `unionpay`) or an `unmapped_<raw value>` fallback. For `qr_scan`, a QR-CPM brand (e.g. `pay_pay`, `we_chat`, `qq`, `line_pay`, `au_pay`, `alipay_china`). For `qr_merchant`, a QR-MPM brand (e.g. `rakuten_pay_merchant`, `alipay_merchant_qr`, `pay_pay_merchant`, `d_barai_mpm`, `we_chat_mpm`). For `online`, an online-redirect brand (e.g. `alipay_online`, `pay_pay_online`, `we_chat_online`, `d_barai_online`, `kakaopay`). For `konbini`, a convenience-store brand (e.g. `seven_eleven`, `family_mart`, `lawson`). For `paidy` and `bank_transfer`, the payment type's own identifier. The full brand catalogue is large and gateway-dependent — treat this as an open string, not a fixed set. | getBrand(): ?string | setBrand(?string brand): void |
| `cardBrand` | `?string` | Optional | Legacy alias of `brand`. Present only when `payment_type` is `card` or `apple_pay`. | getCardBrand(): ?string | setCardBrand(?string cardBrand): void |
| `qrBrand` | `?string` | Optional | Legacy alias of `brand`. Present only when `payment_type` is `qr_merchant`. | getQrBrand(): ?string | setQrBrand(?string qrBrand): void |
| `onlineBrand` | `?string` | Optional | Legacy alias of `brand`. Present only when `payment_type` is `online`. | getOnlineBrand(): ?string | setOnlineBrand(?string onlineBrand): void |
| `dynamicInfo` | `?bool` | Optional | Whether the brand's supported feature set is resolved dynamically. | getDynamicInfo(): ?bool | setDynamicInfo(?bool dynamicInfo): void |
| `supportAuthCapture` | `?bool` | Optional | Whether the brand supports separate authorization and capture. | getSupportAuthCapture(): ?bool | setSupportAuthCapture(?bool supportAuthCapture): void |
| `requiresFullName` | `?bool` | Optional | Whether the brand requires the cardholder's full name. | getRequiresFullName(): ?bool | setRequiresFullName(?bool requiresFullName): void |
| `requiresCvv` | `?bool` | Optional | Whether the brand requires a CVV. | getRequiresCvv(): ?bool | setRequiresCvv(?bool requiresCvv): void |
| `countriesAllowed` | `?(string[])` | Optional | ISO 3166-1 alpha-2 country codes allowed for this brand. `null` when unrestricted. | getCountriesAllowed(): ?array | setCountriesAllowed(?array countriesAllowed): void |
| `supportedCurrencies` | `?(string[])` | Optional | ISO-4217 currency codes supported by this brand. `null` when unrestricted. | getSupportedCurrencies(): ?array | setSupportedCurrencies(?array supportedCurrencies): void |
| `cvvAuth` | `?bool` | Optional | Whether this brand supports CVV-only authorization. | getCvvAuth(): ?bool | setCvvAuth(?bool cvvAuth): void |
| `installmentCapable` | `?bool` | Optional | Whether this brand supports installment plans. | getInstallmentCapable(): ?bool | setInstallmentCapable(?bool installmentCapable): void |
| `mcpCapable` | `?bool` | Optional | Whether this brand supports multi-currency pricing. | getMcpCapable(): ?bool | setMcpCapable(?bool mcpCapable): void |
| `mcpOnly` | `?bool` | Optional | Whether this brand is only available through multi-currency pricing. | getMcpOnly(): ?bool | setMcpOnly(?bool mcpOnly): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutSupportedBrandBuilder;
use UnivaPay\Models\CheckoutPaymentType;
use UnivaPay\ApiHelper;

$checkoutSupportedBrand = CheckoutSupportedBrandBuilder::init()
    ->paymentType(CheckoutPaymentType::CARD)
    ->brand('visa')
    ->cardBrand('visa')
    ->qrBrand('alipay_merchant_qr')
    ->onlineBrand('alipay_online')
    ->dynamicInfo(false)
    ->supportAuthCapture(true)
    ->requiresFullName(false)
    ->requiresCvv(true)
    ->cvvAuth(false)
    ->installmentCapable(true)
    ->mcpCapable(false)
    ->mcpOnly(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

