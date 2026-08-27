
# Customs Declaration Webhook Result

Result payload returned by the customs declaration formatter.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `approvingAuthority` | `?string` | Optional | Customs authority that approved the declaration. | getApprovingAuthority(): ?string | setApprovingAuthority(?string approvingAuthority): void |
| `tradeId` | `?string` | Optional | Gateway trade identifier. | getTradeId(): ?string | setTradeId(?string tradeId): void |
| `transactionId` | `?string` | Optional | Gateway transaction identifier for customs. | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `chargeTransactionId` | `?string` | Optional | Gateway charge transaction identifier linked to the declaration. | getChargeTransactionId(): ?string | setChargeTransactionId(?string chargeTransactionId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookResultBuilder;

$customsDeclarationWebhookResult = CustomsDeclarationWebhookResultBuilder::init()
    ->approvingAuthority('TOKYO')
    ->tradeId('wx_trade_12345')
    ->transactionId('wx_txn_12345')
    ->chargeTransactionId('wx_charge_12345')
    ->build();
```

