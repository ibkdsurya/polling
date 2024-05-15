<?php
// $ adalah sebuah variable di php
    $databaseHost = "localhost";
    $databaseName = "polling";
    $databaseUsername = "root";
    $databasePassword = "";

    $koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)
?>