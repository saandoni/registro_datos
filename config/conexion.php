<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "prueba_servicio";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


