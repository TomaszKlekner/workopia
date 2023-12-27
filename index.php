<?php
$first = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$second = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
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
    <h2 class="text-2xl font-semibold mb-4">Challenge 1: Multiplication Table</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
      <?php foreach ($first as $f => $f_index) : ?>
        <div class="bg-white rounded-lg shadow-md p-6">
          <?php foreach ($second as $s => $s_index) : ?>

            <p><?php echo $f_index . " X " . $s_index . " = " . ($first[$f] * $second[$s]) . '<br />'; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>