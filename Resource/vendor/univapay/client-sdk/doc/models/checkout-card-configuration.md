
# Checkout Card Configuration

Card payment settings applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutCardConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether card payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `debitEnabled` | `?bool` | Optional | Whether debit cards are allowed. | getDebitEnabled(): ?bool | setDebitEnabled(?bool debitEnabled): void |
| `prepaidEnabled` | `?bool` | Optional | Whether prepaid cards are allowed. | getPrepaidEnabled(): ?bool | setPrepaidEnabled(?bool prepaidEnabled): void |
| `debitAuthorizationEnabled` | `?bool` | Optional | Whether authorization-only flows are allowed for debit cards. | getDebitAuthorizationEnabled(): ?bool | setDebitAuthorizationEnabled(?bool debitAuthorizationEnabled): void |
| `prepaidAuthorizationEnabled` | `?bool` | Optional | Whether authorization-only flows are allowed for prepaid cards. | getPrepaidAuthorizationEnabled(): ?bool | setPrepaidAuthorizationEnabled(?bool prepaidAuthorizationEnabled): void |
| `onlyDirectCurrency` | `?bool` | Optional | Whether card processing is restricted to direct-settlement currencies. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `forbiddenCardBrands` | `?(string[])` | Optional | Card brands rejected by merchant policy. Common values include `visa`, `mastercard`, `american_express`, `maestro`, `discover`, `jcb`, `diners_club`, `private_label`, and `unionpay`; gateway-specific brands the platform cannot map appear as `unmapped_<raw value>`. `null` when no brand is forbidden. | getForbiddenCardBrands(): ?array | setForbiddenCardBrands(?array forbiddenCardBrands): void |
| `allowedCountriesByIp` | `?(string[])` | Optional | ISO 3166-1 alpha-2 country codes allowed to originate card payments by IP geolocation. `null` when unrestricted. | getAllowedCountriesByIp(): ?array | setAllowedCountriesByIp(?array allowedCountriesByIp): void |
| `foreignCardsAllowed` | `?bool` | Optional | Whether cards issued outside the primary operating country are allowed. | getForeignCardsAllowed(): ?bool | setForeignCardsAllowed(?bool foreignCardsAllowed): void |
| `failOnNewEmail` | `?bool` | Optional | Whether to reject card charges from previously unseen customer email addresses. `null` when not configured. | getFailOnNewEmail(): ?bool | setFailOnNewEmail(?bool failOnNewEmail): void |
| `cardLimit` | [`?CardLimit`](../../doc/models/card-limit.md) | Optional | Per-card spending limit. `null` when no limit is configured. | getCardLimit(): ?CardLimit | setCardLimit(?CardLimit cardLimit): void |
| `allowEmptyCvv` | `?bool` | Optional | Whether card flows may proceed without a CVV. `null` when not configured. | getAllowEmptyCvv(): ?bool | setAllowEmptyCvv(?bool allowEmptyCvv): void |
| `allowDirectTokenCreation` | `?bool` | Optional | Whether direct card token creation is allowed without a hosted capture flow. | getAllowDirectTokenCreation(): ?bool | setAllowDirectTokenCreation(?bool allowDirectTokenCreation): void |
| `threeDsRequired` | `?bool` | Optional | Whether 3-D Secure is required for eligible card flows. | getThreeDsRequired(): ?bool | setThreeDsRequired(?bool threeDsRequired): void |
| `threeDsAddressRequired` | `?bool` | Optional | Whether billing address data is required when running 3-D Secure. | getThreeDsAddressRequired(): ?bool | setThreeDsAddressRequired(?bool threeDsAddressRequired): void |
| `threeDsSkipEnabled` | `?bool` | Optional | Whether privileged callers may request a 3-D Secure skip. | getThreeDsSkipEnabled(): ?bool | setThreeDsSkipEnabled(?bool threeDsSkipEnabled): void |
| `threeDsPhoneNumberRequired` | `?bool` | Optional | Whether a phone number is required when running 3-D Secure. | getThreeDsPhoneNumberRequired(): ?bool | setThreeDsPhoneNumberRequired(?bool threeDsPhoneNumberRequired): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutCardConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutCardConfiguration = CheckoutCardConfigurationBuilder::init()
    ->enabled(true)
    ->debitEnabled(true)
    ->prepaidEnabled(true)
    ->debitAuthorizationEnabled(false)
    ->prepaidAuthorizationEnabled(false)
    ->onlyDirectCurrency(false)
    ->foreignCardsAllowed(true)
    ->allowDirectTokenCreation(true)
    ->threeDsRequired(false)
    ->threeDsAddressRequired(false)
    ->threeDsSkipEnabled(false)
    ->threeDsPhoneNumberRequired(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

