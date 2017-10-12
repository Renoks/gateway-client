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

##### [Get prices without php client library](/doc/api-usage-without-php-lib.md)

# Response
```json
[
    {
        "number": "5013L83X", // string
        "oe_number": null, // string|null
        "description": "178;80;48;A/A brazed;air;OEM/OES;", // string
        "price": 46.24, // float
        "quantity": 0, // int
        "pictures": [
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e.jpg",
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e-1.jpg"
        ] // can be empty array
    }
    // ...
]
```
