<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 10:59 AM
 */
require_once("db_connect.php");
$sql = "SELECT * FROM employee";
$result = mysql_query($sql) or die(mysql_error());

//$row = mysql_fetch_array($result) or die(mysql_error());


echo '<br>'.'<table>';
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>". $row['empID'] . '</td>'.
        '<td>' . $row['lastName'] . '</td> '.
        '<td>'. $row['firstName']. '</td>'.
        '<td>'. $row['department']. '</td>'.
        '<td>'. $row['position']. '</td>'.
        '<td>'. '$'.$row['salary']. '</td>';
    echo "</tr>";
}
echo '</table>';
