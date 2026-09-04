
# Subscription Three Ds

3-D Secure configuration and redirect details applied to the subscription's payments.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionThreeDs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mode` | [`?string(SubscriptionThreeDsMode)`](../../doc/models/subscription-three-ds-mode.md) | Optional | 3-D Secure authentication mode applied to the subscription's payments. `if_available` enforces 3DS only if credentials are available for the recurring token and it has not already completed 3DS. `provided` indicates externally supplied MPI authentication data was used. | getMode(): ?string | setMode(?string mode): void |
| `redirectEndpoint` | `?string` | Optional | URL the customer is redirected to for 3-D Secure authentication. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `redirectId` | `?string` | Optional | Identifier of the 3-D Secure redirect. | getRedirectId(): ?string | setRedirectId(?string redirectId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionThreeDsBuilder;

$subscriptionThreeDs = SubscriptionThreeDsBuilder::init()->build();
```

