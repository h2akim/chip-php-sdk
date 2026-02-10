### Payment Method

List payment methods for a brand.

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/payment-methods/list)

```
$brandId = 'brand_123';
$response = $collect->paymentMethod()->all($brandId);

$response->toArray();
```

With filters:

```
$brandId = 'brand_123';
$query = [
    'type' => 'card',
];
$response = $collect->paymentMethod()->list($brandId, $query, 'MYR');
```
