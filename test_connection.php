<?php
require_once('db_connect.php');
$conn = getDBConnection();

if ($conn->connect_error) {
    die("❌ Connectie mislukt: " . $conn->connect_error);
}

echo "<h2>✅ Verbonden met MySQL database!</h2>";

// Optioneel: testquery uitvoeren
$result = $conn->query("SHOW TABLES");

if ($result && $result->num_rows > 0) {
    echo "<p>📦 Tabellen in de database:</p><ul>";
    while ($row = $result->fetch_array()) {
        echo "<li>" . htmlspecialchars($row[0]) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>⚠️ Geen tabellen gevonden of query mislukt.</p>";
}

$conn->close();
?>
