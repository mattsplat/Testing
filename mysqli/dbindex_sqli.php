<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 9:28 PM
 */
require_once("db_sqli_connect.php");
$sql = "SELECT empID, lastName, firstName, departmentName, position, salary  FROM employee, departments WHERE department = deptID";
$result = mysqli_query($conn, $sql);
echo ("<table border='1'>");
echo("<tr> <th>ID</th> </th> <th>Last Name</th> <th>First Name</th> <th>Department</th> <th>Job Title</th> <th>Salary</th> </tr>");


//echo '<br>'.'<table>';
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>". $row['empID'] . '</td>'.
        '<td>' . $row['lastName'] . '</td> '.
        '<td>'. $row['firstName']. '</td>'.
        '<td>'. $row['departmentName']. '</td>'.
        '<td>'. $row['position']. '</td>'.
        '<td>'. '$'.$row['salary']. '</td>'.
        '<td><a href="delete.php?id='. $row['empID'] . '">Delete</a></td>'.
        '<td><a href="update.php?id='. $row['empID'] . '">Update</a></td>' ;
    echo "</tr>";
}
echo '</table>';