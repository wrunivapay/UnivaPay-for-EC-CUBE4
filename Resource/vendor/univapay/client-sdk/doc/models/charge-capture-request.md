
# Charge Capture Request

Request payload for capturing an authorized charge. Both fields are optional; omit the entire body to capture the full outstanding amount.

*This model accepts additional fields of type array.*

## Structure

`ChargeCaptureRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | The amount to capture. Must be less than or equal to the authorized amount. If omitted, the full outstanding authorized amount is captured. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. Must exactly match the currency used during authorization. If omitted, defaults to the currency originally requested on the charge. | getCurrency(): ?string | setCurrency(?string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCaptureRequestBuilder;

$chargeCaptureRequest = ChargeCaptureRequestBuilder::init()
    ->amount(1000)
    ->currency('JPY')
    ->build();
```

