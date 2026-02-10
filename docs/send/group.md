### Group

#### List

```
$response = $send->group()->list();
$response->toArray();
```

#### Get

```
$response = $send->group()->get('group-id');
```

#### Create

```
$response = $send->group()->create([
    "name" => "Payroll",
]);
```

#### Update

```
$response = $send->group()->update('group-id', [
    "name" => "Payroll (Updated)",
]);
```

#### Delete

```
$response = $send->group()->destroy('group-id');
```
