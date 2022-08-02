<?php

namespace Nicko170\InfluxDB2\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nicko170\InfluxDB2\InfluxDB2ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nicko170\\InfluxDB2\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            InfluxDB2ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-influxdb2_table.php.stub';
        $migration->up();
        */
    }
}
