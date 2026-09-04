
# Merchant Webhook Money Amount

Monetary amount object serialized by backend config models.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookMoneyAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | Amount in minor currency units. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO 4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;

$merchantWebhookMoneyAmount = MerchantWebhookMoneyAmountBuilder::init()
    ->amount(1000)
    ->currency('JPY')
    ->build();
```

