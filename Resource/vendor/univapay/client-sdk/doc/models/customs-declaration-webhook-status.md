
# Customs Declaration Webhook Status

Customs declaration status returned by the backend.

## Enumeration

`CustomsDeclarationWebhookStatus`

## Fields

| Name |
|  --- |
| `PENDING` |
| `SUCCESSFUL` |
| `FAILED` |
| `ERROR` |

## Example

```php
use UnivaPay\Models\CustomsDeclarationWebhookStatus;

$customsDeclarationWebhookStatus = CustomsDeclarationWebhookStatus::PENDING;
```

