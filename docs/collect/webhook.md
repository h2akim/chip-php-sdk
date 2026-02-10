### Webhook

#### List

```
$response = $collect->webhook()->list();
$response->toArray();
```

#### Get

```
$response = $collect->webhook()->get('webhook-id');
```

#### Create

```
$response = $collect->webhook()->create([
    "url" => "https://example.com/webhooks",
    "events" => ["purchase.paid"],
]);
```

#### Update

```
$response = $collect->webhook()->update('webhook-id', [
    "events" => ["purchase.paid", "purchase.refunded"],
]);
```

#### Delete

```
$response = $collect->webhook()->destroy('webhook-id');
```
