<?php
require __DIR__ . '/../../vendor/autoload.php';

$singleton = new \Patterns\singleton\Singleton();
$singleton->say();