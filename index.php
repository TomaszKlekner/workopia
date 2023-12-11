<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

$user = [
  'name' => 'John',
  'email' => 'john@mail.com',
  'password' => '123456!',
  'hobbies' => ['Tennis', 'Video Games'],
];

$output = $user['name'];
$output = $user['email'];
// $output = $user['email2']; // Warning: Undefined array key "email2"

$output = $user['hobbies'][0];

$user['address'] = '123 Main Str';
unset($user['address']);


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
      <h2 class="text-xl font-semibold my-4">User Array:</h2>
      <p>
      <pre>
          <?php print_r($user); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>