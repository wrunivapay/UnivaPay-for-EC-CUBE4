
# Direct Debit Merchant Configuration

The merchant's effective direct debit configuration.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitMerchantConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `legacyId` | `?string` | Optional | Identifier of the merchant in the legacy direct debit system.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getLegacyId(): ?string | setLegacyId(?string legacyId): void |
| `enabled` | `?bool` | Optional | Whether direct debit is enabled for this merchant. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `debitDate` | [`?string(DirectDebitDebitDate)`](../../doc/models/direct-debit-debit-date.md) | Optional | Monthly debit cycle — funds are pulled on either the 14th or the 27th. | getDebitDate(): ?string | setDebitDate(?string debitDate): void |
| `consignorCode` | `?string` | Optional | Consignor code (委託者コード) assigned by the collecting bank.<br><br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6`, *Pattern*: `^[0-9]{6}$` | getConsignorCode(): ?string | setConsignorCode(?string consignorCode): void |
| `classifier` | `?string` | Optional | Transfer classification code (区分) agreed with the collecting bank.<br><br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2`, *Pattern*: `^[0-9]{2}$` | getClassifier(): ?string | setClassifier(?string classifier): void |
| `signature` | `?string` | Optional | Name printed on the consumer's bank statement (印字名), in half-width katakana. | getSignature(): ?string | setSignature(?string signature): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitMerchantConfigurationBuilder;
use UnivaPay\Models\DirectDebitDebitDate;
use UnivaPay\ApiHelper;

$directDebitMerchantConfiguration = DirectDebitMerchantConfigurationBuilder::init()
    ->legacyId('1283794')
    ->enabled(true)
    ->debitDate(DirectDebitDebitDate::FOURTEEN)
    ->consignorCode('135456')
    ->classifier('99')
    ->signature('モモサン')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

