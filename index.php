<?php
$listing = [
  [
    "id" => "1",
    "title" => "Software Engineer",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "65000",
    "location" => "San Francisco",
    "tags" => ["Software Development", "Java", "Python"],
  ],
  [
    "id" => "2",
    "title" => "Marketing Specialist",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "60000",
    "location" => "New York",
    "tags" => ["Digital Marketing", "Social Media", "SEO"],
  ],
  [
    "id" => "3",
    "title" => "Software Engineer",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "80000",
    "location" => "San Francisco",
    "tags" => ["Software Development", "Java", "Python"],
  ],
  [
    "id" => "4",
    "title" => "Marketing Specialist",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "63000",
    "location" => "New York",
    "tags" => ["Digital Marketing", "Social Media", "SEO"],
  ],
  [
    "id" => "5",
    "title" => "Software Engineer",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "80000",
    "location" => "San Francisco",
    "tags" => ["Software Development", "Java", "Python"],
  ],
  [
    "id" => "6",
    "title" => "Marketing Specialist",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "48000",
    "location" => "New York",
    "tags" => ["Digital Marketing", "Social Media", "SEO"],
  ],
  [
    "id" => "7",
    "title" => "Software Engineer",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "80000",
    "location" => "San Francisco",
    "tags" => ["Software Development", "Java", "Python"],
  ],
  [
    "id" => "8",
    "title" => "Marketing Specialist",
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum! Aperiam omnis ea sequi eos ullam praesentium eveniet accusamus fugit?",
    "salary" => "60000",
    "location" => "New York",
    "tags" => ["Digital Marketing", "Social Media", "SEO"],
  ]
];

function formatSalary($input)
{
  return "$" . number_format($input);
}

function highlightTags($tags, $searchTerm)
{
  $tagString = implode(", ", $tags);
  return str_replace($searchTerm, "<span class='bg-yellow-200 px-1 rounded'>{$searchTerm}</span>", $tagString);
};

function countAverageSalary($input)
{
  $sum = 0;
  for ($i = 0; $i < count($input); $i++) {
    $sum += $input[$i]['salary'];
  }
  return $sum / count($input);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>

  <div class="container mx-auto p-4 mt-4 col-auto">
    <div class="bg-green-200 rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-semibold">Average salary: <?= formatSalary(countAverageSalary($listing)); ?></h2>
    </div>
  </div>

  <div class="container mx-auto p-4 mt-4 col-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
      <?php foreach ($listing as $index => $job) : ?>
        <div class="<?= $index % 2 === 0 ? 'bg-white ' : 'bg-blue-100 ' ?>rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-semibold mb-4"><?= $job['title'] ?></h2>
          <p class="inline-block text-l mb-4"><?= $job['description'] ?></p>
          <p>
            <span class="inline-block text-l font-semibold mb-2">Salary:</span>
            <?= formatSalary($job['salary']); ?>
          </p>
          <p>
            <span class="inline-block text-l font-semibold mb-2">Location:</span>
            <?= $job['location'] ?>
            <?= $job['location'] === 'New York' ? '<span class="text-xs text-white bg-blue-500 rounded-full px-2 py-1 ml-2">Local</span>' : '<span class="text-xs text-white bg-green-500 rounded-full px-2 py-1 ml-2">Remote</span>' ?>
          </p>
          <?= $job['tags'] ?
            '<p><span class="inline-block text-l font-semibold mb-2">Tags:</span> ' . highlightTags($job['tags'], "Digital Marketing") . '</p>' : ''
          ?>
        </div>
      <?php endforeach; ?>
    </div>
</body>

</html>