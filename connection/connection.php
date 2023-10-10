<?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "root";

    $bd = "proyecto_twitter";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

session_start();

?>