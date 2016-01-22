<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 9:23 PM
 */

$db_name = "testdb";
$un = "root";
$pw = "";
$host = "127.0.0.1";

$conn = mysqli_connect($host, $un, $pw, $db_name);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


