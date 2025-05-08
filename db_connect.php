<?php
function getDBConnection() {
    $servername = "mainline.proxy.rlwy.net";
    $port = 59595;
    $username = "root";
    $password = "MHvVWBcLtvzffwgLuWTmgBjKuMuqDGjy";
    $dbname = "railway";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("❌ Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
