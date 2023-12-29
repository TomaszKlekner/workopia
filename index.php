<?php

// Constants - global
define("APP_NAME", "Hostinger");
define("APP_VERSION", "1.0.1");

echo APP_NAME;
echo "<br />";
echo APP_VERSION;
echo "<br /><br />";

const DB_NAME = "mydb";
const DB_HOST = "localhost";

echo DB_NAME . " " . DB_HOST;
echo "<br /><br />";

function run()
{
  // Local function scope
  echo APP_NAME . " " . DB_NAME . " " . DB_HOST;
}

run();

// Try to update a Constant - get an error
define("APP_NAME", "Hostinger2");
const DB_NAME = "newdb";
