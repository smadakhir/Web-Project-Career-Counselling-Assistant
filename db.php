<?php
// db.php – Flexible for both Railway and legacy .env

// Prioritize Railway's vars, else fall back to DB_*
$host = getenv('MYSQLHOST') ?: getenv('DB_HOST');
$user = getenv('MYSQLUSER') ?: getenv('DB_USER');
$pass = getenv('MYSQLPASSWORD') ?: getenv('DB_PASS');
$db   = getenv('MYSQLDATABASE') ?: getenv('DB_NAME');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
