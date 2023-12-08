<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;
$string = "Hello World";

// String functions

// strlen()
$output = strlen($string);

// str_word_count()
$output = str_word_count($string);

// strpos()
$output = strpos($string, "World");

// Get specific character by index
$output = $string[4];

// substr()
$output = substr($string, 6, 5);

// str_replace()
$output = str_replace("World", "Universe", $string);

// strtolower()
$output = strtolower($string);

// strtoupper()
$output = strtoupper($string);

// ucwords()
$output = ucwords($string);

// trim()
$output = trim('  Hello World!!   ');

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