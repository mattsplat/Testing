
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<?php

$to = 'matthewjohncoleman@gmail.com';
$subject = "Feedback";
$message = "hi";
$from = "Bob@fakemail.com";
$headers = "From:".$from;
mail($to,$subject, $message, $headers) or die("failed");
echo("Mail has been sent to ". $to . ' from '. $from);

?>
</body>
</html>