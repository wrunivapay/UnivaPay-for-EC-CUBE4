
# Refund Reason Response

The reason for the refund as returned by the API. Includes operational reasons that merchants cannot set but may still observe on fetched refunds. `duplicate`: A duplicate charge was made. `fraud`: The charge is fraudulent. `customer_request`: The customer requested the refund. `system_failure`: An internal system failure triggered the refund. `chargeback`: A chargeback was raised. `chargeback_fee_exempt`: A fee-exempt chargeback. `chargeback_reverse`: A chargeback reversal.

## Enumeration

`RefundReasonResponse`

## Fields

| Name |
|  --- |
| `DUPLICATE` |
| `FRAUD` |
| `CUSTOMER_REQUEST` |
| `SYSTEM_FAILURE` |
| `CHARGEBACK` |
| `CHARGEBACK_FEE_EXEMPT` |
| `CHARGEBACK_REVERSE` |

## Example

```php
use UnivaPay\Models\RefundReasonResponse;

$refundReasonResponse = RefundReasonResponse::CHARGEBACK_REVERSE;
```

