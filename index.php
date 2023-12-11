<?php
$title = 'Learn PHP From Scratch';
$heading = 'Welcome To The Course';
$body = 'In this course, you will learn the fundamentals of the PHP language';

$output = null;

$ids = [10, 25, 15, 45, 67];
$users = ['user2', 'user1', 'user3'];

// Array methods

// count()
$output = count($ids);

// sort()
sort($ids);
sort($users);

// rsort()
rsort($ids);
rsort($users);

// array_push() - add to end
array_push($ids, 100);
array_push($users, 'user4');

// array_pop() - remove last
array_pop($ids);
array_pop($users);

// array_shift() - remove first
array_shift($ids);
array_shift($users);

// array_unshift() - add as first
array_unshift($ids, 333);
array_unshift($users, 'user15');

// array_slice() - returns a new array
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

// array_splice() - replaces specified element, modifies the array directly
array_splice($ids, 1, 1, 1000);
array_splice($users, 1, 1, 'new user');

// array_sum()
$output = 'Sum of IDs: ' . array_sum($ids2);

// array_search()
$output = 'user1 is at index: ' . array_search('user1', $users);

// in_array() - returns a bool value
array_push($users, 'user3');
$output = 'User 3 exists ' . in_array('user3', $users);

// explode() - turn a string into an array
$tags = 'tech, code, programming';
$tagsArr = explode(',', $tags);
//var_dump($tagsArr);

// implode() - turn an array in a string
$output = implode(', ', $users);

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

      <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
      <p>
      <pre><?php print_r($ids); ?></pre>
      </p>

      <h2 class="text-xl font-semibold my-4">Users Array:</h2>
      <p>
      <pre><?php print_r($users); ?></pre>
      </p>
    </div>
  </div>
</body>

</html>