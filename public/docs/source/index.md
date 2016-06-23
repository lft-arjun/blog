---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

# Info

Welcome to the generated API reference.

# Available routes
#general
## Get all user

Fetch all the user available on system

> Example request:

```bash
curl "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


## Get user detail by Id

Fetch user detail by id from row

> Example request:

```bash
curl "http://localhost/api/v1/user/{id}/detail" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/{id}/detail",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/user/{id}/detail`

`HEAD api/v1/user/{id}/detail`


## Edit User By Id

Edit the user with form post value

> Example request:

```bash
curl "http://localhost/user/{id}/edit" \
-H "Accept: application/json" \
    -d "username"="ea" \
    -d "password"="doloremque" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/user/{id}/edit",
    "method": "POST",
    "data": {
        "username": "ea",
        "password": "doloremque"
},
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST user/{id}/edit`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    username | string |  required  | Maximum: `255`
    password | string |  required  | 

