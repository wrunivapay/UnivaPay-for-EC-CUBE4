
# Merchant Webhook Customer Management Configuration

Customer-management defaults.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookCustomerManagementConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables customer-management features. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `defaultRoles` | `?(string[])` | Optional | Roles applied to newly created customers. | getDefaultRoles(): ?array | setDefaultRoles(?array defaultRoles): void |
| `defaultMode` | `?string` | Optional | Default processing mode assigned to new customer records. | getDefaultMode(): ?string | setDefaultMode(?string defaultMode): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookCustomerManagementConfigurationBuilder;

$merchantWebhookCustomerManagementConfiguration = MerchantWebhookCustomerManagementConfigurationBuilder::init()
    ->enabled(true)
    ->defaultRoles(
        [
            'end_user'
        ]
    )
    ->defaultMode('live')
    ->build();
```

