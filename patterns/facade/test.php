<?php
require __DIR__ . '/../../vendor/autoload.php';

use Patterns\facade\HospitalFacade;

HospitalFacade::register();
echo PHP_EOL;
HospitalFacade::getDrugs();