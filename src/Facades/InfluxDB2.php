<?php

namespace Nicko170\InfluxDB2\Facades;

use Illuminate\Support\Facades\Facade;
use InfluxDB2\Client;

/**
 * @see \Nicko170\InfluxDB2\InfluxDB2
 * @mixin Client
 */
class InfluxDB2 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nicko170\InfluxDB2\InfluxDB2::class;
    }
}
