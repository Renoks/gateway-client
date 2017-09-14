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

##### PriceClient.php
```
throw GuzzleHttp\Exception\ClientException then $endpoint is not valid url (404, 403 http status codes) or credentils ($login and $password) are not valid (401 http status code)
throw WebLabLv\Renoks\Exception\BadResponseStatusCodeException then $endpoint response http status code !== 200
```
##### Api   
You can get all prices manually, need to add **/prices** to your given vendor $endpoint uri to fetch prices.   
[Http basic auth used](https://en.wikipedia.org/wiki/Basic_access_authentication) to authenticate, so you need to provide your given vendor $login, $password to access.

##### Errors

```json
{"message":"Full authentication is required to access this resource"} 
```
