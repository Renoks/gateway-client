# Installation
```
composer require renoks/gateway-client
```

# Usage
```php
$client = new WebLabLv\Renoks\Client\PriceClient($endpoint, $login, $password);
$client->sendRequest();
```
Ask your vendor for $endpoint, $login, $password.

[Example application](https://github.com/renoks/gateway-client-example-app)
