# Installation
```
composer require renoks/gateway-client
```

# Usage
```php
// Get product data with prices
$client = new WebLabLv\Renoks\Client\PriceClient($endpoint, $login, $password);
$client
    ->withWatermark(true) // true (default value) - to get pictures with watermarks, false - without watermarks
    ->sendRequest();
    
// Create (order in Renoks Gateway system
$client = new WebLabLv\Renoks\Client\OrderClient($endpoint, $login, $password);
$client->create([ 
    ...
]);
```
Ask your vendor for $endpoint, $login, $password.

[Example application](https://github.com/renoks/gateway-client-example-app)

# Technical documentation

##### PriceClient.php and OrderClient.php possible exceptions
```
throw GuzzleHttp\Exception\ClientException then $endpoint is not valid url (404, 403 http status codes) or credentils ($login and $password) are not valid (401 http status code)
throw WebLabLv\Renoks\Exception\BadResponseStatusCodeException then $endpoint response http status code !== 200
```

##### [Renoks Gateway api usage without php client library](/doc/api-usage-without-php-lib.md)

# Response example
Get prices example
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
        "description_translations": {
          "en": "Radiator",
          "lv": "Radiators dzesēšanas",
          "ru": "радиатор охлаждения"
        },
        "price": 46.24,
        "quantity": 0,
        "pictures": [
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e.jpg",
            "http://www.fastdeliverycarparts.com/content/aizmugures-lukturi/__750/32u188-e-1.jpg"
        ]
    }
]
```
Create order example
```json
[
    {
        "order": {
            "uuid": "767ccabc-7d64-11e8-8e5f-06596b117317",
            "created_at": "2018-07-01 22:25:07"        
        }
    }
]
```
