<?php
require __DIR__ . '/../../vendor/autoload.php';

use Patterns\singleton\Singleton;

$singleton = Singleton::getApp();
$singleton->say();

$singleton2 = Singleton::getApp();

if ($singleton === $singleton2) {
    echo "same class \n";
}
