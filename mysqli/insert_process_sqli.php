<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 9:58 PM
 */
require_once("db_sqli_connect.php");

$last = $_REQUEST['last'];
$first = $_REQUEST['first'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$salary = $_REQUEST['salary'];

echo($last. ' '. $first. ' '. $department. ' '. $position. ' '. $salary);

$sql= "INSERT INTO employee VALUES (''," .
    "'".$last . "',".
    "'".$first . "',".
    "'".$department . "',".
    "'".$position . "',".
    "'".$salary . "')";

mysqli_query($conn, $sql);
mysqli_close($conn);
echo($sql);