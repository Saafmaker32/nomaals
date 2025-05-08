<?php
require_once('db_connect.php');
$conn = getDBConnection();

// Voorbeeld: haal data op uit een tabel (pas aan naar je echte gebruik)
$result = $conn->query("SELECT * FROM voorbeeld_tabel");

if (!$result) {
    die("Query mislukt: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    echo "<pre>" . print_r($row, true) . "</pre>";
}

$conn->close();
?>
