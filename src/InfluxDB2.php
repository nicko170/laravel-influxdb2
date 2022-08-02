<?php

namespace Nicko170\InfluxDB2;

use InfluxDB2\Client;

/**
 * A wrapper for the InfluxDB2 client.
 *
 * @see Client
 * @mixin Client
 */
class InfluxDB2
{
    public function __construct(protected Client $client)
    {
    }

    public function __call($name, $arguments)
    {
        return app()->call([$this->client, $name], $arguments);
    }

    public function __get($name)
    {
        return $this->client->$name;
    }
}
