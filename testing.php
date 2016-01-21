<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/17/2016
 * Time: 10:59 PM
 */

echo "<h2>Hey buddy</h2>";
$randomStuff = [(12), ("tree"), ("fish"),6, 10, 44, time()];

$l = count($randomStuff);
echo '<link rel="stylesheet" type="text/css" href="theme.css">';
echo '<ul>';

for($i = 0; $i < $l;  $i++) {
    echo '<li>' . $randomStuff[$i] . '</li>';
}
echo '<li>Fatboy</li>';
echo '</ul>';

include('form.html');

?>
<html>
    <head>

    </head>
    <body>

    </body>
</html>
