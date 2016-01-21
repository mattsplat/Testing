<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/18/2016
 * Time: 7:13 PM
 */
    $username = $_REQUEST['username'];
    $password = $_POST['password'];
    $data = $_POST['data'];

    if(isset($_POST['checkboxY'])){
        $yes = $_POST['checkboxY'];
    }
    elseif(isset($_POST['checkboxN'])){
        $no = $_POST['checkboxN'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body><h1>Handling Stuff......</h1>
    <?php echo 'your name is ' . $username .' ' . $password . ' the data is ' . $data; ?>
</body>
</html>
