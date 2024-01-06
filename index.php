<?php

// PDO - connect to the database

// Database Credentials
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'blogadmin';
$password = 'blogadmin';

// Create DSN string
$dsn = "mysql:host={$host};port={$port}:dbname={$dbName};charset=utf8";

try {
  // Crate PDO instance
  $pdo  = new PDO($dsn, $username, $password);

  // Set POD to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Database Connected.';
} catch (PDOException $e) {
  // If there is an error, catch it here
  echo 'Connection Failde: ' . $e->getMessage();
}
