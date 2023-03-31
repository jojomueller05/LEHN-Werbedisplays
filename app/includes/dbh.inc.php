<?php
$host = 'db'; // Name des Service-Containers in Docker Compose
$dbname = 'php-app';
$username = 'php-app';
$password = 'php-app';

// Verbindung aufbauen
try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Verbindung zur Datenbank fehlgeschlagen: ' . $e->getMessage();
    die();
}

/* Beispielabfrage
$stmt = $pdo->query('SELECT * FROM tbl_users');
while ($row = $stmt->fetch()) {
    echo $row['firstname'] . ' ' . $row['lastname'] . '<br>';
}
*/