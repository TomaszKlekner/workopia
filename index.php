<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

// Data Types
// String
$name = 'John Doe';
var_dump($name);
echo '<br>';

// Integer
$age = 35;
var_dump($age);
echo '<br>';

// Float
$rating = 4.6;
var_dump($rating);
echo '<br>';

// Boolean
$isLoaded = false;
var_dump($isLoaded);
echo '<br>';

// Array
$friends = ['John', 'Jane', 'Joe'];
var_dump($friends);
echo '<br>';

// Object
$person = new stdClass();
$person->firstName = 'John';
$person->lastName = 'Doe';
var_dump($person);
echo '<br>';

// Null
$car = null;
var_dump($car);
echo '<br>';

// Resource
$file = fopen('index.php', 'r');
var_dump($file);
echo '<br>';

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
      <p><?= $body ?></p'>
    </div>
  </div>
</body>

</html>