<?php
require 'database.php';

// Check if post id has been provided
$id = $_GET['id'] ?? null;
if (!$id) {
  header('Location: index.php');
  exit;
}

// Create an SQL query
// Use a placeholder (:id)
$sql = 'SELECT * FROM blog.posts WHERE id = :id';

// Prepare statement
$stmt = $pdo->prepare($sql);

// Execute statement
$params = ['id' => $id];
$stmt->execute($params);

// Fetch data
$post = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $post['title'] ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto px-4">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
    <nav class="container mx-auto px-4 pt-8 pb-2">
      <ul class="flex">
        <li class="mr-6">
          <a class="text-white-500 hover:text-white-800" href="http://hostinger.test/">
            Home
          </a>
        </li>
        <li class="mr-6">
          <a class="text-white-500 hover:text-white-800" href="/blog">
            Blog
          </a>
      </ul>
    </nav>
  </header>

  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold">
            <?= $post['title'] ?>
          </h2>
          <p class="text-gray-700 text-lg my-6">
            <?= $post['body'] ?>
          </p>
          <a class="mt-4" href="index.php">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>