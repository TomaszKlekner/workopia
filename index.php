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