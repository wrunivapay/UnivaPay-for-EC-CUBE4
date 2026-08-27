
# Token Response Card Data Cvv Authorize Check

Token Response Card Data Cvv Authorize Check schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardDataCvvAuthorizeCheck`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | Current status of the resource. | getStatus(): ?string | setStatus(?string status): void |
| `chargeId` | `?string` | Optional | Charge identifier. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `date` | `?DateTime` | Optional | Date value. | getDate(): ?\DateTime | setDate(?\DateTime date): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataCvvAuthorizeCheckBuilder;
use UnivaPay\Utils\DateTimeHelper;

$tokenResponseCardDataCvvAuthorizeCheck = TokenResponseCardDataCvvAuthorizeCheckBuilder::init()
    ->status('current')
    ->chargeId(null)
    ->date(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->build();
```

