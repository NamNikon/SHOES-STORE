<?php
require_once __DIR__ . '/config.php';

function getDbConnect(){
    $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8';
    $conn = new PDO($dsn, DBUSERNAME, DBPASSWORD);
    return $conn;
}