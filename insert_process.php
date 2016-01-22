<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 10:02 AM
 */

require_once("db_connect.php");

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

mysql_query($sql);
mysql_close($conn);
echo($sql);
?>