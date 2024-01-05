<?php
// Common server variables
$requestMethod = "";
$serverProtocol = "";
$serverName = "";
$serverPort = "";
$serverSoftware = "";
$serverAdmin = "";
$documentRoot = "";
$scriptFilename = "";
$scriptName = "";
$phpSelf = "";
$remoteAddr = "";
$connection = "";
$host = "";
$referer = "";
$userAgent = "";
$queryString = "";
$requestUri = "";
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
        <h2 class="text-2xl font-semibold mb-4">Request Method</h2>
        <p class="inline-block text-l mb-4"><?= $requestMethod ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Server Protocol</h2>
        <p class="inline-block text-l mb-4"><?= $serverProtocol ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Server Name</h2>
        <p class="inline-block text-l mb-4"><?= $serverName ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Server Port</h2>
        <p class="inline-block text-l mb-4"><?= $serverPort ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Server Software</h2>
        <p class="inline-block text-l mb-4"><?= $serverSoftware ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Server Admin</h2>
        <p class="inline-block text-l mb-4"><?= $serverAdmin ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Document Root</h2>
        <p class="inline-block text-l mb-4"><?= $documentRoot ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Script Filename</h2>
        <p class="inline-block text-l mb-4"><?= $scriptFilename ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Script Name</h2>
        <p class="inline-block text-l mb-4"><?= $scriptName ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">php Self</h2>
        <p class="inline-block text-l mb-4"><?= $phpSelf ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Remote Addr</h2>
        <p class="inline-block text-l mb-4"><?= $remoteAddr ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Connection</h2>
        <p class="inline-block text-l mb-4"><?= $connection ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Host</h2>
        <p class="inline-block text-l mb-4"><?= $host ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Referer</h2>
        <p class="inline-block text-l mb-4"><?= $referer ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">User Agent</h2>
        <p class="inline-block text-l mb-4"><?= $userAgent ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Query String</h2>
        <p class="inline-block text-l mb-4"><?= $queryString ?></p>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Request Uri</h2>
        <p class="inline-block text-l mb-4"><?= $requestUri ?></p>
      </div>
    </div>
</body>

</html>