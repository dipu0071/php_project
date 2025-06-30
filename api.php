<?php
// api.php
header('Content-Type: application/json');
require 'config1.php';

$type = $_GET['type'] ?? '';

if ($type === 'courses') {
    $stmt = $pdo->query("SELECT id, title, description FROM courses ORDER BY created_at DESC");
    echo json_encode($stmt->fetchAll());
    exit;
}

if ($type === 'exams') {
    $stmt = $pdo->query("SELECT id, title, questions FROM practice_exams ORDER BY created_at DESC");
    echo json_encode($stmt->fetchAll());
    exit;
}

// Invalid request
http_response_code(400);
echo json_encode(['error' => 'Invalid type']);