<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(5, 100px);
      grid-gap: 5px;
    }

    .grid-item {
      width: 100px;
      height: 100px;
      background-color: lightblue;
      text-align: center;
      line-height: 100px;
    }
  </style>
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

      <div class="grid-container">
        <?php for ($i = 0; $i < 5; $i++) : ?>
          <?php for ($j = 0; $j < 5; $j++) : ?>
            <div class="grid-item">
              <?= 'i: ' . $i . ' - ' . 'j: ' . $j ?>
            </div>
          <?php endfor ?>
        <?php endfor ?>
      </div>
    </div>
  </div>
</body>

</html>