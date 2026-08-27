
# Direct Debit Bank Transfer Create Request

Request payload for scheduling a transfer against an active bank account.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankTransferCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Transfer amount in JPY. Must be a positive, non-zero whole number.<br><br>**Constraints**: `>= 1` | getAmount(): int | setAmount(int amount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankTransferCreateRequestBuilder;
use UnivaPay\ApiHelper;

$directDebitBankTransferCreateRequest = DirectDebitBankTransferCreateRequestBuilder::init(
    1000
)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

