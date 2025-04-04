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

$collect = Client::makeCollect("myApiKey");
$collect->billingTemplate()->list();
```