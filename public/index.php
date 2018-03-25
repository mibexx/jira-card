<?php

use Xervice\Core\Locator\Locator;


putenv('APPLICATION_PATH=' . dirname(__DIR__));
require dirname(__DIR__) . '/vendor/autoload.php';

$locator = Locator::getInstance();

/**
 * @var \Xervice\Service\ServiceFacade
 */
$facade = $locator->service()->facade();


$facade->registerHandler();
$facade->startApplication();