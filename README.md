# Settings package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/SnippetCMS/snippet-settings.svg?style=flat-square)](https://packagist.org/packages/SnippetCMS/snippet-settings)
[![Build Status](https://github.com/SnippetCMS/snippet-settings/actions/workflows/run-tests.yml/badge.svg)](https://github.com/SnippetCMS/snippet-settings/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/SnippetCMS/snippet-settings.svg?style=flat-square)](https://packagist.org/packages/SnippetCMS/snippet-settings)

This package allows you to save settings in DB & Cache. You can use helper function to get settings value anywhere in a Laravel project like SnippetCMS CMS.

* Database support
* Helper function
* Cache support

## Getting Started

### 1. Install

Run the following command:

```bash
composer require snippet/snippet-settings
```

### 2. Publish

Publish config file.

```bash
php artisan vendor:publish --provider="SnippetCMS\SnippetSettings\SettingsServiceProvider" --tag=settings-config
```

### 3. Preparing the database

You need to publish the migration to create the media table:

```bash
php artisan vendor:publish --provider="SnippetCMS\SnippetSettings\SettingsServiceProvider" --tag=settings-migration
```

After that, you need to run migrations.

```bash
php artisan migrate
```

### 4. Configure

You can change the options of your app from `config/snippet-settings.php` file

## Usage

### Helper

```php
setting()->get('foo');
setting()->get('foo', 'default');
setting()->put('foo', 'bar');
setting()->delete('foo');
```

### Facade

```php
Setting::get('foo');
Setting::get('foo', 'default');
Setting::put('foo', 'bar');
Setting::delete('foo');
```

## Testing

```bash
./vendor/bin/phpunit
```

## Changelog

Please see [Releases](../../releases) for more information what has changed recently.

## Contributing

Pull requests are more than welcome. You must follow the PSR coding standards.

## Security

If you discover any security related issues, please email snippetcms@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more information.
