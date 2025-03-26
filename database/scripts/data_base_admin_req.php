<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admindb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection to Data Base has failed..." . $conn -> connect_error);
    }

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo "Connection failed: " . $e->getMessage();
    }
?>