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
  // Fetch as Assoc array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  // If there is an error, catch it here
  echo 'Connection Failde: ' . $e->getMessage();
}
