
# Create Customer Id Response

Response payload returned after deriving a deterministic customer ID.

*This model accepts additional fields of type array.*

## Structure

`CreateCustomerIdResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `?string` | Optional | Deterministic UUID derived from the store and the supplied local `customer_id`. Identical for repeated calls with the same inputs. | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CreateCustomerIdResponseBuilder;

$createCustomerIdResponse = CreateCustomerIdResponseBuilder::init()
    ->customerId('8a3f1b8e-2c1a-4b7a-9c2e-6f6b6f6e2b10')
    ->build();
```

