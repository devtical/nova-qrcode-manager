# Nova QR Code Manager

A Laravel Nova tool to manage QR code.

![Screenshot](https://i.imgur.com/1mpkE24.png)
![Screenshot](https://i.imgur.com/zlRtm1I.png)

## Installation

You can install the Nova tool in to a [Laravel](http://laravel.com) app that uses [Nova](http://nova.laravel.com) via composer :

```cli
composer require kristories/qrcode-manager
```

Publish the migration with :

```cli
php artisan vendor:publish
```

## Usage

Add `QrcodeManager` to your `NovaServiceProvider.php`

```php
use Kristories\QrcodeManager\QrcodeManager;

// ...

public function tools()
{
    return [
        // ...
    	new QrcodeManager(),
    ];
}
```

## License

The MIT License (MIT).