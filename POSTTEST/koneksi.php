<!-- menyambungkan database/sql ke php -->
<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "posttest_pemweb";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (!$conn){
        die("gagal terhubung ke database : ". mysqli_connect_error());
    }
?> 