
# Customs Declaration Webhook Callback Extension

Customs-declaration-specific webhook payload extension.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookCallbackExtension`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?CustomsDeclarationWebhookData`](../../doc/models/customs-declaration-webhook-data.md) | Optional | Customs declaration payload delivered in `customs_declaration_finished` webhooks. Platform-level deliveries may include `platform_id` and `updated_on`. | getData(): ?CustomsDeclarationWebhookData | setData(?CustomsDeclarationWebhookData data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookCallbackExtensionBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookDataBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookDeclarationBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookResultBuilder;
use UnivaPay\Models\CustomsDeclarationWebhookStatus;
use UnivaPay\Utils\DateTimeHelper;

$customsDeclarationWebhookCallbackExtension = CustomsDeclarationWebhookCallbackExtensionBuilder::init()
    ->data(
        CustomsDeclarationWebhookDataBuilder::init()
            ->id('11ef0000-0000-4000-8000-000000000040')
            ->chargeId('11ef0000-0000-4000-8000-000000000001')
            ->merchantId('11ef0000-0000-4000-8000-000000000020')
            ->storeId('11ef0000-0000-4000-8000-000000000022')
            ->mode('test')
            ->gateway('wechat_online')
            ->declaration(
                CustomsDeclarationWebhookDeclarationBuilder::init()
                    ->customs('TOKYO')
                    ->merchantCustomsNo('1234567890')
                    ->certificateId('AB1234567')
                    ->certificateName('TARO YAMADA')
                    ->build()
            )
            ->declarationResult(
                CustomsDeclarationWebhookResultBuilder::init()
                    ->approvingAuthority('TOKYO')
                    ->tradeId('wx_trade_12345')
                    ->transactionId('wx_txn_12345')
                    ->chargeTransactionId('wx_charge_12345')
                    ->build()
            )
            ->status(CustomsDeclarationWebhookStatus::SUCCESSFUL)
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->build()
    )
    ->build();
```

