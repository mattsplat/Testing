<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/22/2016
 * Time: 6:44 PM
 */
require_once("db_sqli_connect.php");

$id = $_REQUEST['id'];
$sql = "SELECT * FROM employee WHERE empID = '" . $id ."'; ";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$row = mysqli_fetch_array($result) or die(mysqli_error($conn));
echo($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
</head>
<body>
<form action="update_process.php" method ="post">
    <input type="hidden" name="id" value="<?php print($id)?>" />
    <p>Last Name: <br>
        <input type="text" value="<?php print($row['lastName']) ?>" name="last"  /></p>
    <p>First Name: <br>
        <input type="text" value="<?php print($row['firstName']) ?>" name="first"  /></p>
    <p>Department: <br>
        <select name="department">
            <option <?php if($row['department']==1){ print('selected');} ?> "value="1">Accounting</option>
            <option <?php if($row['department']==2){ print('selected');} ?> value="2">Sales</option>
            <option <?php if($row['department']==3){ print('selected');} ?> value="3">Information Technology</option>
            <option <?php if($row['department']==4){ print('selected');} ?> value="4">Management</option>
        </select>
    <p>Position: <br>
        <input type="text" value="<?php print($row['position']) ?>" name="position"  /></p>
    <p>Salary: <br>
        <input type="text" value="<?php print($row['salary']); ?>" name="salary"  /></p>
    <input type="submit" value="Update Information" />

</form>





</body>
</html>