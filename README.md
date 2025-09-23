# This is my package wang-editor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jason-chen/wang-editor.svg?style=flat-square)](https://packagist.org/packages/jason-chen/wang-editor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jason-chen/wang-editor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jason-chen/wang-editor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jason-chen/wang-editor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jason-chen/wang-editor/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jason-chen/wang-editor.svg?style=flat-square)](https://packagist.org/packages/jason-chen/wang-editor)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jason-chen/wang-editor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="wang-editor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="wang-editor-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="wang-editor-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$wangEditor = new Jason\WangEditor();
echo $wangEditor->echoPhrase('Hello, Jason!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jason](https://github.com/Jason.Chen)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
