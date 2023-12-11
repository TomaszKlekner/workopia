<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

$fruits = [
  ["Apple", "Red"],
  ["Orange", "Orange"],
  ["Banana", "Yellow"],
];

$output = $fruits[0][0];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John ', 'email' => 'john@gmail.com', 'password' => '123456!'],
  ['name' => 'Mary ', 'email' => 'mary@gmail.com', 'password' => '335588!'],
  ['name' => 'Ken ', 'email' => 'ken@gmail.com', 'password' => '6699000!'],
];

$output = $users[1]['email'];

// Add a user
$users[] = ['name' => 'Tom', "email" => "email@gmail.com", "password" => "123123!"];

// Push a user to the end of the array
array_push($users, ['name' => 'Adam', "email" => "adam@gmail.com", "password" => "123123!"]);

// Remove last user
array_pop($users);

// Remove first user
array_shift($users);

// Remove a specific user
unset($users[0]);

// Count users
$output = count($users);
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
      <p><?php echo $output; ?></p>
      <h2 class="text-xl font-semibold my-4">Users Array:</h2>
      <p>
      <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>