### Account

#### Balance

```
$response = $collect->account()->balance([
    "from" => "2024-01-01",
    "to" => "2024-01-31",
]);

$response->toArray();
```

#### Turnover

```
$response = $collect->account()->turnover([
    "from" => "2024-01-01",
    "to" => "2024-01-31",
]);

$response->toArray();
```
