### Company Statement

#### List

```
$response = $collect->companyStatement()->list();
$response->toArray();
```

#### Schedule

```
$query = [
    "from" => "2024-01-01",
    "to" => "2024-01-31",
];
$body = [
    "recipient_email" => "finance@test.com",
];
$response = $collect->companyStatement()->schedule($query, $body, 'MYR');
```

#### Get

```
$response = $collect->companyStatement()->get('statement-id');
```

#### Cancel

```
$response = $collect->companyStatement()->cancel('statement-id');
```
