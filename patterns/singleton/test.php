<?php
require __DIR__ . '/../../vendor/autoload.php';

use Patterns\singleton\Singleton;

$singleton = Singleton::getApp();
$singleton->say();
