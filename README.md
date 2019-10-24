# Twilio Wrapper for Laravel
Wrapper for Twilio SDK. 

## Warning
This package is currently in development. Not suggested for production at this time.

## Requirements
- Twilio/SDK 5.37
- Laravel 5.7+ 

## Installation

### Composer Installation
Install the package through composer in your terminal.

```
composer require twilio/sdk
```
```
composer require codingfoundry/twilio
```

### Setup The Environment (.env File) for Authentication
Add these details to your .env environment file with your own details as appropriate.

Each Environment Variable is REQUIRED for a successful connection.

```
TWILIO_ACCOUNT_SID=
TWILIO_AUTH_TOKEN=
```

## Usage
### GET Request
Collect data from the ConnectWise Manage API using the query string parameters provided in the ConnectWise Manage API Documentation. This package will only passthrough keys that are provided by ConnectWise for Query String integrity.

Accepted Query String Parameters can be found [here](https://developer.connectwise.com/Products/Manage/Developer_Guide#Query_String_Parameters).

#### Example GET Request
Here is an GET Request Example using the Facade

```php
use taylormaguire\CWManageAPI\CWManageAPI;

CWManageAPI::get('company/companies', [
    'pageSize' => 30,
    'page' => 1,
    'orderBy' => 'chargeToId asc',
    'fields' => 'id,company/name,status'
]);
```

The example above will output a query string of

```
https://api-na.myconnectwise.net/company/companies?pageSize=30&page=1&orderBy=company/name%20%asc&fields=id,company/name,status
```
