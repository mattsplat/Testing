<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 10:00 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Employee</title>
</head>
<body>
<form action="insert_process_sqli.php" method ="post">
    <p>Last Name: <br>
        <input type="text" name="last"  /></p>
    <p>First Name: <br>
        <input type="text" name="first"  /></p>
    <p>Department: <br>
        <select name="department">
            <option value="1">Accounting</option>
            <option value="2">Sales</option>
            <option value="3">Information Technology</option>
            <option value="4">Management</option>
        </select>
    <p>Position: <br>
        <input type="text" name="position"  /></p>
    <p>Salary: <br>
        <input type="text" name="salary"  /></p>
    <input type="submit" value="Save Information" />

</form>





</body>
</html>