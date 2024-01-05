<?php

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

  <div class="container mx-auto p-4 mt-4 col-auto">
    <div class="<?= $index % 2 === 0 ? 'bg-white ' : 'bg-blue-100 ' ?>rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4">Heading</h2>
      <p class="inline-block text-l mb-4">Paragraph</p>
    </div>
</body>

</html>