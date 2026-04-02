<?php
// Database settings
$host = "localhost";
$dbname = "student";
$username = "root";
$password = ""; // XAMPP default is usually empty

try {
  // Create PDO connection
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

  // Set error mode
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Database connected successfully.";
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}
?>