# Installation
```
composer require renoks/gateway-client
```

# Usage
```php
$withWatermark = true; // default value - get product pictures with watermark

$client = new WebLabLv\Renoks\Client\PriceClient($endpoint, $login, $password);
$client->withWatermark($withWatermark)->sendRequest();
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

# Response example
```json
[
    {
        "number": "5013L83X",
        "oe_number": "1231800065,",
        "producer": "BILSTEIN",
        "part_name": "Oil cooler",
        "part_group": "Thermal parts",
        "part_kind": "Radiators",
        "quality": "Q",
        "measure_unit": "pcs",
        "description": "178;80;48;A/A brazed;air;OEM/OES;",
        "price": 46.24,
        "quantity": 0,
        "pictures": [
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e.jpg",
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e-1.jpg"
        ]
    }
]
```
