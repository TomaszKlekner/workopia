<?php
$names = ['John Doe', 'Tom Ford', 'Kim Bass', 'Dave Gray'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'jack', 'email' => 'jack@email.com'],
  ['name' => 'Kate', 'email' => 'kate@email.com'],
  ['name' => 'Aaron', 'email' => 'aaron@email.com'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4">Nested Loops</h2>
      <!-- Output -->
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
        <?php for ($i = 0; $i < count($names); $i++) : ?>
          <li><?= $names[$i] ?></li>
        <?php endfor; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a forEach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name) : ?>
          <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a forEach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $index => $name) : ?>
          <li><?= $index . ": " . $name ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a forEach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user) : ?>
          <li><?= $user['name'] . " " . $user['email'] ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>

</html>