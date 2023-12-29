<?php

function add($a = 1, $b = 1)
{
  return $a + $b;
}

echo add(2, 2);
echo '<br />';
echo add();
echo '<br />';

function sayHello($name = "World")
{
  return "Hello " . $name;
}

echo sayHello("Tomek");
echo '<br />';
echo  sayHello();

// Splat operator
function addAll(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo '<br />';
echo addAll(1, 2, 3, 4, 5, 6, 7);
