<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

$num1 = 20;
$num2 = 10;

// Basic Math Operators
$output = '$num1 + $num2 = ' . $num1 + $num2;
$output = '$num1 - $num2 = ' . $num1 - $num2;
$output = '$num1 * $num2 = ' . $num1 * $num2;
$output = '$num1 / $num2 = ' . $num1 / $num2;
$output = '$num1 % $num2 = ' . $num1 % $num2;

// Assignment Operators
$num3 = 10;
// $num3 = $num3 + 20;
// $num3 += 20; // $num3 = $num3 + 10;
$num3 -= 20; // $num3 = $num3 + 10;
$output = $num3;

// Build-in PHP Functions
// rand()
$output = rand();
$output = getrandmax();
$output = rand(1, 10);

// round()
$output = round(4.2);

// ceil()
$output = ceil(4.5);

// floor()
$output = floor(4.5);

// sqrt()
$output = sqrt(64);

// pi()
$output = pi();

// abs()
$output = abs(-100.38);

// max()
$output = max(1, 2, 3, 50);
$output = max([1, 25, 3, 21]);

// min()
$output = min(11, 2, 3, 50);
$output = min([11, 25, 3, 21]);

// number_format()
$output = number_format(1234567.89123, 2, ',', '.'); // format currencies for example

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-semibold"><?= $title ?></h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold mb-4"><?= $heading ?></h2>
      <p><?= $output ?></p>
    </div>
  </div>
</body>

</html>