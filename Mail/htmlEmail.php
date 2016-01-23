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

    $from = "Bob@fakemail.com";
    $headers = "From:". $from . "\r\n";
    $headers = "Reply-To " . $from . "\r\n";
    $headers = "MIME-Version : 1.0\r\n";
    $headers = "Content-Type: text/html: charset=ISO=5889-1\r\n";
    $message = "<!DOCTYPE html><html lang=\"en\"><head><title>Email</title></head><body>Hi</body></html>";
    mail($to,$subject, $message, $headers);
    echo("Mail has been sent.");
?>
</body>
</html>
