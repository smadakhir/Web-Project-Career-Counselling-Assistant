<?php
require 'db.php';
session_start();
$user_id = $_SESSION['user_id'] ?? 0;
$result = $conn->query("SELECT title, description FROM careers ORDER BY RAND() LIMIT 3");
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
?>