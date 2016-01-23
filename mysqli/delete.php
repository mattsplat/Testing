<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/22/2016
 * Time: 6:34 PM
 */

$id = $_REQUEST['id'];

require_once("db_sqli_connect.php");

$sql = "DELETE FROM employee WHERE empID= '" . $id . "';";
//echo($sql);
mysqli_query($sql) or die(mysqli_error($sql));

print("User ". $id . " deleted");
print("Return to <a href='dbindex_sqli.php'> Main page</a>" );