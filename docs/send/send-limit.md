### Send Limit

#### Increase budget allocation

```
$response = $send->sendLimit()->increaseBudgetAllocation([
    "amount" => 10000,
]);
$response->toArray();
```

#### Get

```
$response = $send->sendLimit()->get('limit-id');
```

#### List

```
$response = $send->sendLimit()->list();
```

#### Resend approval request

```
$response = $send->sendLimit()->resendApprovalRequest('limit-id');
```
