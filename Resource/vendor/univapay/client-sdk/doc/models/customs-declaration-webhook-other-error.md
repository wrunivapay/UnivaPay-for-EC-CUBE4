
# Customs Declaration Webhook Other Error

Nested customs-processing error entry returned in `others`.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookOtherError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Backend other-error type. | getType(): ?string | setType(?string type): void |
| `credentialsId` | `?string` | Optional | Gateway credentials involved in the error when applicable. | getCredentialsId(): ?string | setCredentialsId(?string credentialsId): void |
| `message` | `?(string[])` | Optional | Additional reason values for `not_selected_reasons`. | getMessage(): ?array | setMessage(?array message): void |
| `itemName` | `?string` | Optional | Related item name for `related_item`. | getItemName(): ?string | setItemName(?string itemName): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookOtherErrorBuilder;

$customsDeclarationWebhookOtherError = CustomsDeclarationWebhookOtherErrorBuilder::init()
    ->type('related_item')
    ->itemName('charge')
    ->build();
```

