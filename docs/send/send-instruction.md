### Send Instruction

#### List

```
$response = $send->sendInstruction()->list();
$response->toArray();
```

#### Get

```
$response = $send->sendInstruction()->get('instruction-id');
```

#### Create

```
$response = $send->sendInstruction()->create([
    "bank_account_id" => "bank-account-id",
    "amount" => 1000,
    ...
]);
```

#### Delete

```
$response = $send->sendInstruction()->destroy('instruction-id');
```

#### Resend webhook event

```
$response = $send->sendInstruction()->resendWebhookEvent('instruction-id');
```
