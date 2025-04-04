**This library is still WIP**

## Installation

### Composer

To install through composer by using the following command:

    composer require php-http/guzzle7-adapter hakimrazalan/chip-php-sdk

#### HTTP Adapter

Instead of utilizing `php-http/guzzle7-adapter` you might want to use any other adapter that implements `php-http/client-implementation`. Check [Clients & Adapters](http://docs.php-http.org/en/latest/clients.html) for PHP-HTTP.

#### Usage

```
use Chip\Client;

$collect = Client::makeCollect("myApiKey");
$collect->billingTemplate()->list();
```