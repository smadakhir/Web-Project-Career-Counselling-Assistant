<?php
require 'db.php';
session_start();
$user_id = $_SESSION['user_id'] ?? 0;
$answer1 = $_POST['q1'] ?? '';
$answer2 = $_POST['q2'] ?? '';
$stmt = $conn->prepare("INSERT INTO answers (user_id, question_id, answer_text) VALUES (?, ?, ?), (?, ?, ?)");
$stmt->bind_param("iisiis", $user_id, $q1 = 1, $answer1, $user_id, $q2 = 2, $answer2);
$stmt->execute();
header("Location: ../public/result.html");
exit;
?>