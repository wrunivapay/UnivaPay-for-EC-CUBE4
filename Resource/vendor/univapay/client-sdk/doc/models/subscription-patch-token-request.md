
# Subscription Patch Token Request

Request body for updating the payment method (transaction token) of a subscription. The new token must belong to the same store, be active, and match the subscription's mode.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPatchTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionTokenId` | `string` | Required | The ID of the new transaction token to use for future subscription payments. Must be a recurring or subscription-type token for the same store. | getTransactionTokenId(): string | setTransactionTokenId(string transactionTokenId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPatchTokenRequestBuilder;

$subscriptionPatchTokenRequest = SubscriptionPatchTokenRequestBuilder::init(
    '11ef3362-3700-c54a-9baa-6f7e6527c9d9'
)->build();
```

