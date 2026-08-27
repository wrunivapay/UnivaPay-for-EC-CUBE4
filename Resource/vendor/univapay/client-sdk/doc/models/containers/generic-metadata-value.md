
# Generic Metadata Value

Allowed values for metadata properties. Values may be a string, number, boolean, null, or an array of any of the above — but not a nested object; the server rejects metadata whose direct property values are JSON objects.

## Data Type

`string|float|bool|array[]`

## Cases

| Type |
|  --- |
| `string` |
| `float` |
| `bool` |
| `array[]` |

## string

### Initialization Code

#### Example

```php
$value = 'sale';
```

## float

### Initialization Code

#### Example

```php
$value = 10;
```

## bool

### Initialization Code

#### Example

```php
$value = true;
```

## array[]

### Initialization Code

#### Example

```php
$value = [
    ApiHelper::deserialize('"sale"'),
    ApiHelper::deserialize('"promo"')
];
```

