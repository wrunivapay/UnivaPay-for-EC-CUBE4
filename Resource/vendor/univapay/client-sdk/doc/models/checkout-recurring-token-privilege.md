
# Checkout Recurring Token Privilege

Level of recurring-charge privilege granted to transaction tokens created under this store: `none` disallows recurring use, `bounded` allows a limited number of recurring charges, and `infinite` allows unlimited recurring charges.

## Enumeration

`CheckoutRecurringTokenPrivilege`

## Fields

| Name |
|  --- |
| `NONE` |
| `BOUNDED` |
| `INFINITE` |

## Example

```php
use UnivaPay\Models\CheckoutRecurringTokenPrivilege;

$checkoutRecurringTokenPrivilege = CheckoutRecurringTokenPrivilege::INFINITE;
```

