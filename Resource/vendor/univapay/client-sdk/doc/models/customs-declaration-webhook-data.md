
# Customs Declaration Webhook Data

Customs declaration payload delivered in `customs_declaration_finished` webhooks. Platform-level deliveries may include `platform_id` and `updated_on`.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Customs declaration identifier. | getId(): ?string | setId(?string id): void |
| `chargeId` | `?string` | Optional | Charge identifier associated with the declaration. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `merchantId` | `?string` | Optional | Merchant identifier. | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `platformId` | `?string` | Optional | Platform identifier, included on platform-level deliveries. | getPlatformId(): ?string | setPlatformId(?string platformId): void |
| `mode` | `?string` | Optional | Processing mode. | getMode(): ?string | setMode(?string mode): void |
| `gateway` | `?string` | Optional | Gateway that processed the declaration. | getGateway(): ?string | setGateway(?string gateway): void |
| `declaration` | [`?CustomsDeclarationWebhookDeclaration`](../../doc/models/customs-declaration-webhook-declaration.md) | Optional | WeChat customs declaration payload returned by the backend formatter. | getDeclaration(): ?CustomsDeclarationWebhookDeclaration | setDeclaration(?CustomsDeclarationWebhookDeclaration declaration): void |
| `declarationResult` | [`?CustomsDeclarationWebhookResult`](../../doc/models/customs-declaration-webhook-result.md) | Optional | Result payload returned by the customs declaration formatter. | getDeclarationResult(): ?CustomsDeclarationWebhookResult | setDeclarationResult(?CustomsDeclarationWebhookResult declarationResult): void |
| `status` | [`?string(CustomsDeclarationWebhookStatus)`](../../doc/models/customs-declaration-webhook-status.md) | Optional | Customs declaration status returned by the backend. | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?CustomsDeclarationWebhookError`](../../doc/models/customs-declaration-webhook-error.md) | Optional | Error payload returned when customs declaration processing fails. | getError(): ?CustomsDeclarationWebhookError | setError(?CustomsDeclarationWebhookError error): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the declaration was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the declaration was last updated, included on platform-level deliveries. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookDataBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookDeclarationBuilder;
use UnivaPay\Models\Builders\CustomsDeclarationWebhookResultBuilder;
use UnivaPay\Models\CustomsDeclarationWebhookStatus;
use UnivaPay\Utils\DateTimeHelper;

$customsDeclarationWebhookData = CustomsDeclarationWebhookDataBuilder::init()
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
    ->error(
        null
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

