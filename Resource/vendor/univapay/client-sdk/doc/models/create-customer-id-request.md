
# Create Customer Id Request

Request payload for deriving a deterministic customer ID.

*This model accepts additional fields of type array.*

## Structure

`CreateCustomerIdRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerId` | `string` | Required | The merchant's own local identifier for the customer, used as the seed for a deterministic per-store UUID.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getCustomerId(): string | setCustomerId(string customerId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CreateCustomerIdRequestBuilder;

$createCustomerIdRequest = CreateCustomerIdRequestBuilder::init(
    'local-customer-1902'
)->build();
```

