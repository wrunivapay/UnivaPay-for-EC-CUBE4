
# Merchant Webhook Card Configuration

Card payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookCardConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables card payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `debitEnabled` | `?bool` | Optional | Allows debit cards for payment flows. | getDebitEnabled(): ?bool | setDebitEnabled(?bool debitEnabled): void |
| `prepaidEnabled` | `?bool` | Optional | Allows prepaid cards for payment flows. | getPrepaidEnabled(): ?bool | setPrepaidEnabled(?bool prepaidEnabled): void |
| `debitAuthorizationEnabled` | `?bool` | Optional | Allows authorization-only flows for debit cards. | getDebitAuthorizationEnabled(): ?bool | setDebitAuthorizationEnabled(?bool debitAuthorizationEnabled): void |
| `prepaidAuthorizationEnabled` | `?bool` | Optional | Allows authorization-only flows for prepaid cards. | getPrepaidAuthorizationEnabled(): ?bool | setPrepaidAuthorizationEnabled(?bool prepaidAuthorizationEnabled): void |
| `forbiddenCardBrands` | `?(string[])` | Optional | Card brands rejected by merchant policy. | getForbiddenCardBrands(): ?array | setForbiddenCardBrands(?array forbiddenCardBrands): void |
| `allowedCountriesByIp` | `?(string[])` | Optional | Source IP country codes allowed for card payments. | getAllowedCountriesByIp(): ?array | setAllowedCountriesByIp(?array allowedCountriesByIp): void |
| `foreignCardsAllowed` | `?bool` | Optional | Allows cards issued outside the primary operating country. | getForeignCardsAllowed(): ?bool | setForeignCardsAllowed(?bool foreignCardsAllowed): void |
| `failOnNewEmail` | `?bool` | Optional | Rejects card charges from previously unseen customer email addresses. | getFailOnNewEmail(): ?bool | setFailOnNewEmail(?bool failOnNewEmail): void |
| `cardLimit` | `?int` | Optional | Maximum number of cards allowed per customer context. | getCardLimit(): ?int | setCardLimit(?int cardLimit): void |
| `allowEmptyCvv` | `?bool` | Optional | Allows card flows without providing a CVV. | getAllowEmptyCvv(): ?bool | setAllowEmptyCvv(?bool allowEmptyCvv): void |
| `onlyDirectCurrency` | `?bool` | Optional | Limits card processing to direct-settlement currencies only. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `threeDsRequired` | `?bool` | Optional | Requires 3-D Secure for eligible card flows. | getThreeDsRequired(): ?bool | setThreeDsRequired(?bool threeDsRequired): void |
| `threeDsAddressRequired` | `?bool` | Optional | Requires billing address data when running 3-D Secure. | getThreeDsAddressRequired(): ?bool | setThreeDsAddressRequired(?bool threeDsAddressRequired): void |
| `threeDsSkipEnabled` | `?bool` | Optional | Allows privileged callers to request 3-D Secure skip mode. | getThreeDsSkipEnabled(): ?bool | setThreeDsSkipEnabled(?bool threeDsSkipEnabled): void |
| `allowDirectTokenCreation` | `?bool` | Optional | Allows direct card token creation without hosted capture flows. | getAllowDirectTokenCreation(): ?bool | setAllowDirectTokenCreation(?bool allowDirectTokenCreation): void |
| `threeDsPhoneNumberRequired` | `?bool` | Optional | Requires a phone number when running 3-D Secure. | getThreeDsPhoneNumberRequired(): ?bool | setThreeDsPhoneNumberRequired(?bool threeDsPhoneNumberRequired): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookCardConfigurationBuilder;

$merchantWebhookCardConfiguration = MerchantWebhookCardConfigurationBuilder::init()
    ->enabled(true)
    ->debitEnabled(true)
    ->prepaidEnabled(false)
    ->foreignCardsAllowed(false)
    ->threeDsRequired(true)
    ->allowDirectTokenCreation(false)
    ->build();
```

