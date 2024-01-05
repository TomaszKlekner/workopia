<?php

// Super Globals - are very practical, but if you are not careful, they can be a source of security vulnerabilities

// Associative arrays
// $_GLOBALS - References variables in the global scope
// $_SERVER - Contains info about the server line hostname, file, path, etc.
// $_GET - Variables passed to the script via query params and GET forms
// $_POST - Variables passed to the script via POST forms
// $_FILES - Items uploaded to current script
// $_COOKIE - Variables passed to the script via HTTP cookies
// $_SESSION - Session variables available to the script
// $_REQUEST - Contains the contents of $_GET, $_POST and $_COOKIE - is not recommended to use
// $_ENV - Variables passed to the script via environment method


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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10">
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Heading</h2>
        <p class="inline-block text-l mb-4">Paragraph</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Heading</h2>
        <p class="inline-block text-l mb-4">Paragraph</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Heading</h2>
        <p class="inline-block text-l mb-4">Paragraph</p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Heading</h2>
        <p class="inline-block text-l mb-4">Paragraph</p>
      </div>
    </div>
</body>

</html>