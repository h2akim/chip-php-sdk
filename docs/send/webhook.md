### Webhook

#### List

```
$response = $send->webhook()->list();
$response->toArray();
```

#### Get

```
$response = $send->webhook()->get('webhook-id');
```

#### Create

```
$response = $send->webhook()->create([
    "url" => "https://example.com/webhooks",
    "events" => ["send.instruction.created"],
]);
```

#### Update

```
$response = $send->webhook()->update('webhook-id', [
    "events" => ["send.instruction.created", "send.instruction.updated"],
]);
```

#### Delete

```
$response = $send->webhook()->destroy('webhook-id');
```
