<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

// Dates and Time
/*
- `` - The year
- `` - The month
- `` - The day
- `` - The day of the week short name
- `` - The day of the week long name
- `` - The hour
- `` - The minute
- `` - The second
- `` - AM/PM
 */

// Date

// Get Year
$output = date("Y");

// Get Year with timestamp
$output = date("Y", 936345600);

// Get Year with timestamp from strtotime
$output = date("Y", strtotime('1999-09-01'));

// Get Month
$output = date('m');

// Get Day
$output = date('d');
$output = date('D');
$output = date('l');

// get Whole date
$output = date('Y-m-d');
$output = date('d-m-Y');

// Get hour
$output = date('h');

// Get minute
$output = date('i');

// Get second
$output = date('s');

// Get am/pmM
$output = date('a');

// Get full date and time
$output = date('Y-m-d h:i:s a');

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