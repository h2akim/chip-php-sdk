### Bank Account

#### List

```
$response = $send->bankAccount()->list();
$response->toArray();
```

With filters:

```
$response = $send->bankAccount()->list([
    "status" => "active",
]);
```

#### Get

```
$response = $send->bankAccount()->get('bank-account-id');
```

#### Create

```
$response = $send->bankAccount()->create([
    "bank_account_number" => "1234567890",
    "bank_account_holder_name" => "Test User",
    ...
]);
```

#### Delete

```
$response = $send->bankAccount()->destroy('bank-account-id');
```

#### Resend webhook event

```
$response = $send->bankAccount()->resendWebhookEvent('bank-account-id');
```
