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
Carrier Lookup
```
use codingfoundry\twilio;

Twilio::carrier_lookup('+16048546548');
```