### Public Key

#### Create Purchase

New purchase can be created by following code

Refer: [Create Purchase](https://docs.chip-in.asia/chip-collect/api-reference/purchases/create)

```
$response = $collect->create([
    "client" => [
        "email" => "test@test.com",
    ],
    ...
])

$response->toArray();
```