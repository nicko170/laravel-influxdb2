# laravel-influxdb2

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nicko170/laravel-influxdb2.svg?style=flat-square)](https://packagist.org/packages/nicko170/laravel-influxdb2)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/nicko170/laravel-influxdb2/run-tests?label=tests)](https://github.com/nicko170/laravel-influxdb2/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/nicko170/laravel-influxdb2/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/nicko170/laravel-influxdb2/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nicko170/laravel-influxdb2.svg?style=flat-square)](https://packagist.org/packages/nicko170/laravel-influxdb2)

A simple wrapper around `influxdata/influxdb-client-php` to make usage in Laravel easier.

## Installation

You can install the package via composer:

```bash
composer require nicko170/laravel-influxdb2
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-influxdb2-config"
```

This is the contents of the published config file:

```php
return [
    'url' => env('INFLUXDB_URL', 'http://localhost:8086'),
    'token' => env('INFLUXDB_TOKEN'),
    'bucket' => env('INFLUXDB_BUCKET'),
    'org' => env('INFLUXDB_ORG'),
    'precision' => \InfluxDB2\Model\WritePrecision::S
];
```

## Usage

Add your InfluxDB connection to your `.env` file:
```dotenv
INFLUXDB_URL=https://ap-southeast-2-1.aws.cloud2.influxdata.com
INFLUXDB_TOKEN=XXX
INFLUXDB_BUCKET=YYY
INFLUXDB_ORG=ZZZ
```

Create a new class instance, and use it to write data:

```php
$influxdb = new \Nicko170\InfluxDB2\InfluxDB2()
$writer = $influxdb->createWriteApi();
$writer->write(new \InfluxDB2\Point('cpu_load', ['host' => 'serverA'], ['value' => 0.64]));
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/nicko170/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nick Pratley](https://github.com/nicko170)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
