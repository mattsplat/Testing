<?php
/**
 * Created by PhpStorm.
 * User: Mateo
 * Date: 1/21/2016
 * Time: 8:22 AM
 */
    $db_name = "testdb";
    $un = "root";
    $pw = "";
    $host = "127.0.0.1";


    $conn = mysql_connect($host,$un, $pw) or die (mysql_error());
    echo("Connected to DB ". $db_name . "<br>");
    mysql_select_db($db_name) or die (mysql_error());
    echo("Connected to testdb"."<br>");
