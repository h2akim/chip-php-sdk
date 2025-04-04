**This library is still WIP**

## Installation

#### Composer

To install through composer by using the following command:

    composer require php-http/guzzle7-adapter hakimrazalan/chip-php-sdk

#### HTTP Adapter

Refer [PHP-HTTP Clients & Adapters](http://docs.php-http.org/en/latest/clients.html) for other supported clients and adapters.

#### Usage

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
$collect = Client::makeSend("myApiKey", "secretKey", $http);
```