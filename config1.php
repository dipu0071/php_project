<?php
// config.php
$host   = '127.0.0.1';
$db     = 'notesnexam';
$user   = 'root';
$pass   = '';         // default XAMPP MySQL root has no password
$charset= 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
  http_response_code(500);
  die(json_encode(['error' => 'DB Connection failed']));
}