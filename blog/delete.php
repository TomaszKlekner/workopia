<?php
require 'database.php';

$isDeleteReuiest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteReuiest) {
  // Get post id
  $id = $_POST['id'];

  // Write SQL query
  $sql = 'DELETE FROM blog.posts WHERE id = :id';

  // Prepare statement
  $stmt = $pdo->prepare($sql);

  // Execute statement
  $params = ['id' => $id];
  $stmt->execute($params);

  // Redirect to index
  header('Location: index.php');
  exit;
}
