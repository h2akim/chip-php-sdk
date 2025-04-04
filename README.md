**This library is still WIP**

## Installation

### Composer

To install through composer by using the following command:

    composer require php-http/guzzle7-adapter hakimrazalan/chip-php-sdk

#### HTTP Adapter

You might want to use other adapter that implements `php-http/client-implementation`. Refer [Clients & Adapters](http://docs.php-http.org/en/latest/clients.html)

#### Usage

```
use Chip\Client;

$collect = Client::makeCollect("myApiKey");
$collect->billingTemplate()->list();
```