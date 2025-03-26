<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webstruct";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Connection to Data Base has failed..." . $conn -> connect_error);
    }
?>