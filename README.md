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

# Technical documentation

##### PriceClient.php sendRequest method possible exceptions
```
throw GuzzleHttp\Exception\ClientException then $endpoint is not valid url (404, 403 http status codes) or credentils ($login and $password) are not valid (401 http status code)
throw WebLabLv\Renoks\Exception\BadResponseStatusCodeException then $endpoint response http status code !== 200
```

##### [Get prices without php client library]()
