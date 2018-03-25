<?php


use Xervice\DataProvider\DataProviderConfig;
use Xervice\Service\ServiceConfig;

$config[DataProviderConfig::DATA_PROVIDER_GENERATED_PATH] = dirname(__DIR__) . '/src/Generated';
$config[DataProviderConfig::DATA_PROVIDER_PATHS] = [
    dirname(__DIR__) . '/src/App/*/Schema',
    dirname(__DIR__) . '/vendor/xervice/*/src/Xervice/*/schema'
];

$config[ServiceConfig::DEBUG_ACTIVE] = true;