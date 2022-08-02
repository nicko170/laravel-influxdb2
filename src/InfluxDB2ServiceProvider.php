<?php

namespace Nicko170\InfluxDB2;

use InfluxDB2\Client;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InfluxDB2ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-influxdb2')
            ->hasConfigFile('influxdb2');

        $this->app->bind(Client::class, fn() => new Client(config('influxdb2')));
    }
}
