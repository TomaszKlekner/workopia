<?php

// Global scope
$name = "Alice";

function sayHello($name)
{
  // Local scope
  echo "Hello " . $name;
}

echo sayHello($name);
echo "<br /><br />";

function sayHello2()
{
  // Use globally scoped variables
  global $name;
  // Local scope
  // Reassign a variable
  $name = "Bob"; // overwrites the global variable
  echo "Hello " . $name;
}

function sayGoodbye()
{
  $names = ["Jack", "Jill"];
  echo "Goodbye " . $names[0];
}

echo $name;
echo "<br /><br />";
echo sayHello2();
echo "<br /><br />";
echo $name;
echo "<br /><br />";
echo sayGoodbye();
echo $names[1];
