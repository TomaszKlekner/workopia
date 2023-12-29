<?php

// Anonymous functions
$square = function ($number) {
  return $number * $number;
};

$result = $square(5);

echo $result;
echo "<br /><br />";

// Closure
function createCounter()
{
  $count = 0;

  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
};

$counter = createCounter();
echo $counter() . "<br />";
echo $counter() . "<br />";
echo $counter() . "<br />";
echo $counter() . "<br />";
