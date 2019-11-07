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
composer require codingfoundry/twilio
```

### Setup The Environment (.env File) for Authentication
Add these details to your .env environment file with your own details as appropriate.

Each Environment Variable is REQUIRED for a successful connection.

```php
TWILIO_ACCOUNT_SID=
TWILIO_AUTH_TOKEN=
TWILIO_PHONE_NUMBER=
```

## Usage
### Carrier Lookup

Twilio::carrier_lookup($number);

Requires E.164 Number format. ie. +13334445555

```php
use CodingFoundry\Twilio\Twilio;

Twilio::carrier_lookup('+16045554444');
```

### Send SMS

Twilio::send_sms($number, $body);

Requires E.164 Number format. ie. +13334445555
```php
use CodingFoundry\Twilio\Twilio;

Twilio::send_sms('+16045554444', 'This is my test sms text message!');
```

### Send Voice Call

Twilio::send_voice($number, $body);

Requires E.164 Number format. ie. +13334445555
```php
use CodingFoundry\Twilio\Twilio;

Twilio::send_voice('+16045554444', 'This is my test sms text message!');
```
