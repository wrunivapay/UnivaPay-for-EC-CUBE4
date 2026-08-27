
# Refund Status

Current status of the refund. `pending`: The refund has been created and is being processed. `successful`: The refund was processed successfully. `failed`: The refund was rejected by the gateway. `error`: An unexpected error occurred during processing.

## Enumeration

`RefundStatus`

## Fields

| Name |
|  --- |
| `PENDING` |
| `SUCCESSFUL` |
| `FAILED` |
| `ERROR` |

## Example

```php
use UnivaPay\Models\RefundStatus;

$refundStatus = RefundStatus::FAILED;
```

