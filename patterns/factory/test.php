<?php
require __DIR__ . '/../../vendor/autoload.php';

use Patterns\factory\DbFactory;

$dbMysql = DbFactory::getDb('mysql');
$dbMysql->query('Mysql');


$dbOrical = DbFactory::getDb('orical');
$dbOrical->query('Orical');