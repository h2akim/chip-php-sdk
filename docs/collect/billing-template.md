### Billing Template (Billing)

#### List

```
$response = $collect->billingTemplate()->list();
$response->toArray();
```

#### Create

Refer: [API Docs](https://docs.chip-in.asia/chip-collect/api-reference/billing-templates/create)

```
$response = $collect->billingTemplate()->create([
    "name" => "Monthly Plan",
    ...
]);
```

#### Get

```
$response = $collect->billingTemplate()->get('template-id');
```

#### Update

```
$response = $collect->billingTemplate()->update('template-id', [
    "name" => "New Name",
]);
```

#### Delete

```
$response = $collect->billingTemplate()->destroy('template-id');
```

#### Send invoice

```
$response = $collect->billingTemplate()->sendInvoice('template-id', [
    "client_email" => "test@test.com",
]);
```

#### Add subscriber

```
$response = $collect->billingTemplate()->addSubscriber('template-id', [
    "client_email" => "test@test.com",
]);
```

#### List clients

```
$response = $collect->billingTemplate()->allClients('template-id');
```

#### Get client

```
$response = $collect->billingTemplate()->getClient('template-id', 'client-id');
```

#### Update client

```
$response = $collect->billingTemplate()->updateClient('template-id', 'client-id', [
    "email" => "new@test.com",
]);
```
