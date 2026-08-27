
# Issuer Token

Issuer token or bank transfer instruction payload.

*This model accepts additional fields of type array.*

## Structure

`IssuerToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentType` | [`string(IssuerTokenPaymentType)`](../../doc/models/issuer-token-payment-type.md) | Required | The type of payment method for the charge. | getPaymentType(): string | setPaymentType(string paymentType): void |
| `issuerToken` | `?string` | Optional | (Online) The token or payment URL provided by the payment provider for the consumer to execute. | getIssuerToken(): ?string | setIssuerToken(?string issuerToken): void |
| `callMethod` | [`?string(IssuerTokenCallMethod)`](../../doc/models/issuer-token-call-method.md) | Optional | (Online) How the client should execute the token.  - `sdk` / `app`: Direct use in native app environments/SDKs. - `web`: Direct use in special extended browser environments. - `http_get` / `http_post`: Execute directly in a new browser window or iframe. | getCallMethod(): ?string | setCallMethod(?string callMethod): void |
| `payload` | [`?IssuerTokenPayload`](../../doc/models/issuer-token-payload.md) | Optional | Key-value pairs required to complete the payment action, or null if not applicable. Used when `call_method` is `http_post`. When present, this JSON must be converted by the client to match the expected `content_type` (e.g., transformed into an `application/x-www-form-urlencoded` string) before sending the POST request. | getPayload(): ?IssuerTokenPayload | setPayload(?IssuerTokenPayload payload): void |
| `accountId` | `?string` | Optional | (Bank Transfer) Unique ID of the bank account issued by the connected system. | getAccountId(): ?string | setAccountId(?string accountId): void |
| `branchCode` | `?string` | Optional | (Bank Transfer) Branch code. | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `branchName` | `?string` | Optional | (Bank Transfer) Branch name. | getBranchName(): ?string | setBranchName(?string branchName): void |
| `accountHolderName` | `?string` | Optional | (Bank Transfer) Account holder name. | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `accountNumber` | `?string` | Optional | (Bank Transfer) Account number. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\IssuerTokenBuilder;
use UnivaPay\Models\IssuerTokenPaymentType;
use UnivaPay\Models\IssuerTokenCallMethod;
use UnivaPay\Models\Builders\IssuerTokenPayloadBuilder;

$issuerToken = IssuerTokenBuilder::init(
    IssuerTokenPaymentType::ONLINE
)
    ->issuerToken('https://example.com/payments/issuer')
    ->callMethod(IssuerTokenCallMethod::HTTP_POST)
    ->payload(
        IssuerTokenPayloadBuilder::init()
            ->requestData('example')
            ->build()
    )
    ->build();
```

