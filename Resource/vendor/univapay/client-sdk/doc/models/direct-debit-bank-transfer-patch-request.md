
# Direct Debit Bank Transfer Patch Request

Request payload for changing a transfer's amount. Only permitted while the transfer is unlocked.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankTransferPatchRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Transfer amount in JPY. Must be a positive, non-zero whole number.<br><br>**Constraints**: `>= 1` | getAmount(): int | setAmount(int amount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankTransferPatchRequestBuilder;
use UnivaPay\ApiHelper;

$directDebitBankTransferPatchRequest = DirectDebitBankTransferPatchRequestBuilder::init(
    1000
)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

