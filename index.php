<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

// Strings

$firstName = 'John';
$lastName = 'Doe';
$fullName = $firstName . ' ' . $lastName;

// Implicit Type Conversion
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

$result = $number1 + $number2;  // int
$result = $number1 + $number3;  // int (string to int)
$result = $number3 + $number3;  // int (string to int)
$result = $number1 . $number2;  // string (int to string)
// $result = $fruit + $number2; // Error
$result = $number1 + $bool1;    // int (bool to int) true converted to 1
$result = $number1 + $bool2;    // int (bool to int) false converted to 0
$result = $number3 + $bool1;    // int (string to int) true converted to 1
$result = $number3 + $bool2;    // int (string to int) false converted to 0
$result = $number1 + $null;     // int (null to int) null converted to 0
$result = $bool1 + $null;       // int (null to int) null converted to 0
$result = $bool2 + $null;       // int (null to int) null converted to 0

// Explicit Type Conversion
$result = (string) $number1;    // int to string
$result = (int) $number3;       // string to int
$result = (bool) $number1;      // int to bool
$result = (bool) $number2;      // int to bool
$result = (bool) $number3;      // string to bool


var_dump($result);

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
      <p><?php echo "Hello, my name is $fullName"; ?></p>
      <p><?= 'Hello, my name is ' . $fullName; ?></p>
    </div>
  </div>
</body>

</html>