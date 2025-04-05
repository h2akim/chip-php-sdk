## Purchases

### Create Purchase

New purchase can be created by following code

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/create)

```
$response = $collect->create([
    "client" => [
        "email" => "test@test.com",
    ],
    ...
]);

$response->toArray();
```

---

### Retrieve a Purchase

Retrieve a purchase

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/retrieve)

```
$response = $collect->get('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac');

$response->toArray();
```

---

### Cancel a pending purchase

Cancel a pending purchase

Refer: [Cancel a pending purchase](https://docs.chip-in.asia/chip-collect/api-reference/purchases/cancel)

```
$response = $collect->cancel('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac');

$response->toArray();
```

---

### Release funds on hold

Release funds on hold

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/release)

```
$response = $collect->release('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac');

$response->toArray();
```

---


### Capture a previously authorized payment

Capture a previously authorized payment

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/capture)

```
$amount = 200; // Optional
$response = $collect->capture('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac', $amount);

$response->toArray();
```

Second parameter `amount` is optional. If you don't provide the amount, full amount is captured.

---

### Charge a purchase using a saved token

Charge a purchase using a saved token

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/charge)

```
$purchaseId = 'cb16ea9a-b4f3-42d8-bb93-8f3591b721ac';
$recurringToken = '87146f27-1a32-40ac-9e29-fb0dc44b7c2b';
$response = $collect->charge($purchaseId, $recurringToken);

$response->toArray();
```

---

### Delete a recurring token associated with a purchase

Delete a recurring token associated with a purchase

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/delete-recurring-token)

```
$purchaseId = 'cb16ea9a-b4f3-42d8-bb93-8f3591b721ac';
$response = $collect->destroyRecurringToken($purchaseId)

$response->toArray();
```

---

### Refund a paid purchase

Refund a paid purchase

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/refund)

```
$response = $collect->refund('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac')

$response->toArray();
```

---

### Mark a purchase as paid

Mark a purchase as paid

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/mark-as-paid)

```
$response = $collect->markAsPaid('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac')

$response->toArray();
```

---

### Resend an invoice

Resend an invoice

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/purchases/resend-invoice)

```
$response = $collect->resendInvoice('cb16ea9a-b4f3-42d8-bb93-8f3591b721ac')

$response->toArray();
```