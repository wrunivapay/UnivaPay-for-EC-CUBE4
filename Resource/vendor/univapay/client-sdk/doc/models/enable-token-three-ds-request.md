
# Enable Token Three Ds Request

Request payload for enabling 3DS on a recurring token. Both the body and `redirect_endpoint` are optional.

*This model accepts additional fields of type array.*

## Structure

`EnableTokenThreeDsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redirectEndpoint` | `?string` | Optional | URL to redirect the customer to after 3DS authentication. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\EnableTokenThreeDsRequestBuilder;

$enableTokenThreeDsRequest = EnableTokenThreeDsRequestBuilder::init()->build();
```

