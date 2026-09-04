
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| baseUrl | `string` | Base URL for the API<br>*Default*: `'https://api.univapay.com'` |
| directDebitBaseUrl | `string` | Base URL for the Direct Debit API<br>*Default*: `'https://direct-debit.gopay-services.com'` |
| environment | [`Environment`](../README.md#environments) | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `30` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524, 408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT', 'GET', 'PUT'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](../doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](../doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| bearerAuthCredentials | [`BearerAuthCredentials`](auth/oauth-2-bearer-token.md) | The Credentials Setter for OAuth 2 Bearer token |

The API client can be initialized as follows:

```php
use UnivaPay\Logging\LoggingConfigurationBuilder;
use UnivaPay\Logging\RequestLoggingConfigurationBuilder;
use UnivaPay\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use UnivaPay\Environment;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\UnivapayClientSdkClientBuilder;

$client = UnivapayClientSdkClientBuilder::init()
    ->bearerAuthCredentials(
        BearerAuthCredentialsBuilder::init(
            'AccessToken'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->baseUrl('https://api.univapay.com')
    ->directDebitBaseUrl('https://direct-debit.gopay-services.com')
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

## Univapay Public API Client

The gateway for the SDK. This class acts as a factory for the Apis and also holds the configuration of the SDK.

## Apis

| Name | Description |
|  --- | --- |
| getChargesApi() | Gets ChargesApi |
| getTransactionTokensApi() | Gets TransactionTokensApi |
| getRefundsApi() | Gets RefundsApi |
| getSubscriptionsApi() | Gets SubscriptionsApi |
| getCancelsApi() | Gets CancelsApi |
| getMerchantsApi() | Gets MerchantsApi |
| getStoresApi() | Gets StoresApi |
| getWebhooksApi() | Gets WebhooksApi |
| getDirectDebitApi() | Gets DirectDebitApi |
| getCheckoutApi() | Gets CheckoutApi |
| getTransactionHistoryApi() | Gets TransactionHistoryApi |

