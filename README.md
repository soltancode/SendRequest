# SendRequest

PHP cURL class that makes it easy to send HTTP requests and integrate with web APIs.

[![Packagist Version](https://img.shields.io/packagist/v/soltancode/send-request?label=stable)](https://packagist.org/packages/soltancode/send-request)
[![Packagist Stars](https://img.shields.io/packagist/stars/soltancode/send-request)](https://packagist.org/packages/soltancode/send-request)
[![Packagist Downloads](https://img.shields.io/packagist/dt/soltancode/send-request)](https://packagist.org/packages/soltancode/send-request)
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/soltancode/send-request)](https://packagist.org/packages/soltancode/send-request)
[![Packagist License](https://img.shields.io/packagist/l/soltancode/send-request)](https://github.com/soltancode/SendRequest/blob/main/LICENSE)

## Installation

```
composer require soltancode/send-request
```

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

use Soltancode\SendRequest\ConnectApi;

$baseUrl = "https://dummyjson.com";
$service = "/products/1";

$curl = new ConnectApi();
$curl->get($baseUrl, $service);
```

```php
$baseUrl = "https://dummyjson.com";
$service = "/products/1";
$params  = [
    'q' => 'phone'
]

$curl = new ConnectApi();
$curl->get($baseUrl, $service, $params); # https://dummyjson.com/products/search?q=phone
```

```php
$baseUrl = "https://www.example.com";
$service = "/login";

$curl = new ConnectApi();
$curl->post($baseUrl, $service, [
    'username' => 'myusername',
    'password' => 'mypassword'
]);
```
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://github.com/soltancode/SendRequest/blob/main/LICENSE)