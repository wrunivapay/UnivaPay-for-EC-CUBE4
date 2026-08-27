
# Charge Create Request Three Ds Mode

3D-Secure authentication type. App Token Secret is required to use 'skip'. `if_available` enforces 3DS only if credentials are available for the recurring token and it has not already completed 3DS. `provided` is set automatically by the server when external MPI authentication data (`authentication_value`, `eci`, etc.) is submitted on the request and cannot be set manually. When omitted, the store's default 3DS policy applies — do not assume 'normal'.

## Enumeration

`ChargeCreateRequestThreeDsMode`

## Fields

| Name |
|  --- |
| `NORMAL` |
| `REQUIRE_` |
| `FORCE` |
| `SKIP` |
| `IF_AVAILABLE` |
| `PROVIDED` |

## Example

```php
use UnivaPay\Models\ChargeCreateRequestThreeDsMode;

$chargeCreateRequestThreeDsMode = ChargeCreateRequestThreeDsMode::NORMAL;
```

