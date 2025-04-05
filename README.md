# PHP framework agnostic to work with CHIP API

## Installation

#### Composer

To install through composer by using the following command:

    composer require php-http/guzzle7-adapter hakimrazalan/chip-php-sdk

#### HTTP Adapter

Refer [PHP-HTTP Clients & Adapters](http://docs.php-http.org/en/latest/clients.html) for other supported clients and adapters.

## Get Started

### Creating client

To create CHIP client, you need to know which service you want to use - **Collect** / **Send**. Use the following codes:

```
use Chip\Client;

// To use Collect
$collect = Client::makeCollect("myApiKey");

// To use Send
$collect = Client::makeSend("myApiKey", "secretKey");
```

Alternatively, you could configure `Http\Client\Common\HttpMethodsClient` manually

```
use Chip\Client;

// To use Collect
$http = Laravie\Codex\Discovery::client();
$collect = Client::makeCollect("myApiKey", $http);

// To use Send
$send = Client::makeSend("myApiKey", "secretKey", $http);
```

### Use Sandbox

Sandbox options is only supported for **Send** API. To use sandbox environment:
```
$send->useSandbox();
```

# Usages

For Collect &rarr; [Here](docs/collect.md)

For Send &rarr; [Here](docs/send.md)