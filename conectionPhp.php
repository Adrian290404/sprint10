<?php

    $host = "localhost";
    $user = "root";
    $pass = "AldeanuevA68.";
    $nameDB = "php";

    $conn = new MySQLi($host, $user, $pass, $nameDB);
    if ($conn -> connect_errno){
        die("Connection failed");
    }
    $conn -> set_charset("utf8");

?>