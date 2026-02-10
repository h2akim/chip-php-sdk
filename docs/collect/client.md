### Client

#### List

```
$response = $collect->client()->list();
$response->toArray();
```

#### Get

```
$response = $collect->client()->get('client-id');
```

#### Create

```
$response = $collect->client()->create([
    "email" => "test@test.com",
    ...
]);
```

#### Update

```
$response = $collect->client()->update('client-id', [
    "name" => "Updated Name",
]);
```

#### Patch

```
$response = $collect->client()->patch('client-id', [
    "name" => "Patched Name",
]);
```

#### Delete

```
$response = $collect->client()->destroy('client-id');
```

#### List recurring tokens

```
$response = $collect->client()->allRecurringTokens('client-id');
```

#### Get recurring token

```
$response = $collect->client()->getRecurringToken('client-id', 'purchase-id');
```

#### Delete recurring token

```
$response = $collect->client()->destroyRecurringToken('client-id', 'purchase-id');
```
