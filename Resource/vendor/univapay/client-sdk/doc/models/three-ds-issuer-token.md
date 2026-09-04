
# Three Ds Issuer Token

3-D Secure issuer token payload.

*This model accepts additional fields of type array.*

## Structure

`ThreeDsIssuerToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentType` | `string` | Required, Constant | Only 'card' is supported for 3-D Secure issuer tokens.<br><br>**Value**: `'card'` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `issuerToken` | `string` | Required | The 3-D Secure authentication URL to which the client must send the request. | getIssuerToken(): string | setIssuerToken(string issuerToken): void |
| `callMethod` | `string` | Required, Constant | Execution method. Currently, only 'http_post' is supported.<br><br>**Value**: `'http_post'` | getCallMethod(): string | setCallMethod(string callMethod): void |
| `payload` | [`?IssuerTokenPayload`](../../doc/models/issuer-token-payload.md) | Optional | Key-value pairs required to complete the payment action, or null if not applicable. Used when `call_method` is `http_post`. When present, this JSON must be converted by the client to match the expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string) before sending the POST request. | getPayload(): ?IssuerTokenPayload | setPayload(?IssuerTokenPayload payload): void |
| `contentType` | `string` | Required | The expected content type of the payload required by the card issuer's endpoint  (e.g., 'application/x-www-form-urlencoded; charset=UTF-8'). | getContentType(): string | setContentType(string contentType): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ThreeDsIssuerTokenBuilder;
use UnivaPay\Models\Builders\IssuerTokenPayloadBuilder;
use UnivaPay\ApiHelper;

$threeDsIssuerToken = ThreeDsIssuerTokenBuilder::init(
    'https://example.com/resource',
    'application/x-www-form-urlencoded; charset=UTF-8'
)
    ->payload(
        IssuerTokenPayloadBuilder::init()
            ->requestData('example')
            ->sSpcd('sSpcd6')
            ->sCptok('sCptok0')
            ->sTerkn('sTerkn6')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

