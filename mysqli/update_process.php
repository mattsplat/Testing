<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/22/2016
 * Time: 11:33 PM
 */

require_once("db_sqli_connect.php");

$id = $_REQUEST['id'];
$last = $_REQUEST['last'];
$first = $_REQUEST['first'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$salary = $_REQUEST['salary'];

$sql= "UPDATE employee SET " .
        "lastName = '" . $last . "', " .
        "firstName = '" . $first . "', " .
        "department = '" . $department . "', " .
        "position = '" . $position . "', " .
        "salary = '" . $salary . "' WHERE empID = '" .$id. "'; ";

//echo($sql);
mysqli_query($conn,$sql) or die(mysqli_error($conn));
print("User ".$id . " has benn updated. Back to <a href='dbindex_sqli.php'>Main Page</a>.");


