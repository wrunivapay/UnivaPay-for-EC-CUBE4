
# Merchant Webhook Card Brand Percent Fees

Per-card-brand percent fee overrides.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookCardBrandPercentFees`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `visa` | `?float` | Optional | Percent fee override applied to Visa transactions. | getVisa(): ?float | setVisa(?float visa): void |
| `americanExpress` | `?float` | Optional | Percent fee override applied to American Express transactions. | getAmericanExpress(): ?float | setAmericanExpress(?float americanExpress): void |
| `mastercard` | `?float` | Optional | Percent fee override applied to Mastercard transactions. | getMastercard(): ?float | setMastercard(?float mastercard): void |
| `maestro` | `?float` | Optional | Percent fee override applied to Maestro transactions. | getMaestro(): ?float | setMaestro(?float maestro): void |
| `discover` | `?float` | Optional | Percent fee override applied to Discover transactions. | getDiscover(): ?float | setDiscover(?float discover): void |
| `jcb` | `?float` | Optional | Percent fee override applied to JCB transactions. | getJcb(): ?float | setJcb(?float jcb): void |
| `dinersClub` | `?float` | Optional | Percent fee override applied to Diners Club transactions. | getDinersClub(): ?float | setDinersClub(?float dinersClub): void |
| `unionPay` | `?float` | Optional | Percent fee override applied to UnionPay transactions. | getUnionPay(): ?float | setUnionPay(?float unionPay): void |
| `privateLabel` | `?float` | Optional | Percent fee override applied to private-label card transactions. | getPrivateLabel(): ?float | setPrivateLabel(?float privateLabel): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookCardBrandPercentFeesBuilder;

$merchantWebhookCardBrandPercentFees = MerchantWebhookCardBrandPercentFeesBuilder::init()
    ->visa(3.6)
    ->mastercard(3.6)
    ->jcb(3.8)
    ->build();
```

