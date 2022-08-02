<?php

return [
    'url' => env('INFLUXDB_URL', 'http://localhost:8086'),
    'token' => env('INFLUXDB_TOKEN'),
    'bucket' => env('INFLUXDB_BUCKET'),
    'org' => env('INFLUXDB_ORG'),
    'precision' => \InfluxDB2\Model\WritePrecision::S
];
