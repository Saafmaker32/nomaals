<?php
function getDBConnection() {
    $servername = "turntable.proxy.rlwy.net";
    $port = 56655;
    $username = "root";
    $password = "WFpvhikyCgMPfFyqjZgmrZFZVKKOfhuF";
    $dbname = "railway";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("❌ Connectie mislukt: " . $conn->connect_error);
    }

    return $conn;
}
?>

