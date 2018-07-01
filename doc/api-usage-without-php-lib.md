##### Get prices [get]
You can get all prices manually, need to add **/prices** to your given vendor $endpoint uri to fetch prices.   
[Http basic auth](https://en.wikipedia.org/wiki/Basic_access_authentication) used to authenticate, so you need to provide your given vendor $login, $password to access.
Stateless authentication method used, so you need to provide your credentials at **each** request. 

<<<<<<< HEAD
##### Create order [post]
To create order in Renoks Gateway system, need to add **/orders** to your given vendor $endpoint uri.
[Http basic auth](https://en.wikipedia.org/wiki/Basic_access_authentication) used to authenticate, so you need to provide your given vendor $login, $password to access.
Request post parameter **data** is **required*** and must be **array** type

##### Possible errors
=======
###### Request parameters
You can use ?with-watermark=1/0 query parameter to get product pictures with/without watermark
```
example: /prices?with-watermark=0 to get pictures without watermark
```
##### Errors
>>>>>>> afb551dc6190e0d5b92c2fc3a147306c33d97f01
Credentials are not provided
```json
{"message":"Full authentication is required to access this resource"} 
```
Credentials ($login) is not valid
```json
{"message": "Username could not be found."}
```
Credentials ($login and $password) are not valid
```json
{"message": "Invalid credentials."}
```
Create order data parameter not given or is empty
```json
{"code":400, "message": "Request validation failed, required parameter 'data' should not be blank"}
```
