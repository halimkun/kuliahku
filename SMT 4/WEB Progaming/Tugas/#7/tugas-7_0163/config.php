<?php   
    $conn = new mysqli("localhost", "root", "", "universitas");

    if ($conn->connect_error) {
        echo "KONEKSI DATABASE GAGAL <br>";
        echo $conn->connect_error;
        die();
    }
