<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

// Arrays

$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4.5, 6];

function inspect($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
}

// inspect($names);
// inspect($numbers);

// print_r($numbers);

// Warning: Array to string conversion
// echo $names;

// echo $names[1];
// echo $numbers[3];

// Add element to array
$numbers[6] = 700;
$numbers[] = 701;

// Update element in array
$numbers[3] = 220;

// Delete element in array
unset($numbers[3]); // removes value and index
$numbers = array_values($numbers); // reindexes the array


inspect($numbers);
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

    </div>
  </div>
</body>

</html>