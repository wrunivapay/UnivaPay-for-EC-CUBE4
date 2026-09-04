
# Merchant Webhook Checkout Toggle

Checkout feature toggle.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookCheckoutToggle`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables this checkout field in hosted payment flows. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookCheckoutToggleBuilder;

$merchantWebhookCheckoutToggle = MerchantWebhookCheckoutToggleBuilder::init()
    ->enabled(true)
    ->build();
```

