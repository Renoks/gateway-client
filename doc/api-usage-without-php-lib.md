##### Api
You can get all prices manually, need to add **/prices** to your given vendor $endpoint uri to fetch prices.   
[Http basic auth](https://en.wikipedia.org/wiki/Basic_access_authentication) used to authenticate, so you need to provide your given vendor $login, $password to access.
Stateless authentication method used, so you need to provide your credentials at **each** request. 

##### Errors
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
