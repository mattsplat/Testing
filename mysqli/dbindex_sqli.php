<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 9:28 PM
 */
require_once("db_sqli_connect.php");
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

//$row = mysql_fetch_array($result) or die(mysql_error());


echo '<br>'.'<table>';
while($row = mysqli_fetch_array($result)) {
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