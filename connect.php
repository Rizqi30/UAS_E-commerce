<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "uas_pwl";

    $connect = mysqli_connect($host, $user, $password, $database);

    if (!$connect){
        die("koneksi gagal: ".mysqli_connect_error());
    } 

?>