
# Token Event

Event type discriminator — `token_created`, `token_updated`, `token_three_d_s_updated`, `token_cvv_auth_updated`, `token_cvv_auth_check_updated`, `token_replaced`, or `recurring_token_deleted`.

## Enumeration

`TokenEvent`

## Fields

| Name |
|  --- |
| `TOKEN_CREATED` |
| `TOKEN_UPDATED` |
| `TOKEN_THREE_D_S_UPDATED` |
| `TOKEN_CVV_AUTH_UPDATED` |
| `TOKEN_CVV_AUTH_CHECK_UPDATED` |
| `TOKEN_REPLACED` |
| `RECURRING_TOKEN_DELETED` |

## Example

```php
use UnivaPay\Models\TokenEvent;

$tokenEvent = TokenEvent::TOKEN_THREE_D_S_UPDATED;
```

