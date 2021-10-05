# Notify Admin Helper for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/proclame/laravel-notify-admin.svg?style=flat-square)](https://packagist.org/packages/proclame/laravel-notify-admin)
[![Total Downloads](https://img.shields.io/packagist/dt/proclame/laravel-notify-admin.svg?style=flat-square)](https://packagist.org/packages/proclame/laravel-notify-admin)


An easy helper to notify the admin or webmaster about general events using Laravel's notification system.

Every so often an app can use a little monitoring, and often this is not to a Model (User) that is required int the app to exist.<br>
This helper allows you to define main Notification “routes”, where a notification can be sent.

## Installation

You can install the package via composer:

```bash
composer require proclame/laravel-notify-admin
```

You can (optionally) publish the config file with:
```bash
php artisan vendor:publish --provider="Proclame\LaravelNotifyAdmin\NotifyAdminServiceProvider"
```

This is the contents of the published config file:<br>
You can add options for extra notification channels

```php
return [
    'mail' => env('NOTIFY_ADMIN_MAIL'),
    'telegram' => env('NOTIFY_ADMIN_TELEGRAM'),
];
```

## Usage

```php
notify_admin(new InvoicePaid($invoice));
```

## Testing
@todo
```bash
composer test
```


## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
