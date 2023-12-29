<?php

// Types in PHP

// Turn strict types on
declare(strict_types=1);

function getSum(int $a, int $b): int
{
  return $a + $b;
}

// Fatal error: Uncaught TypeError: getSum(): Argument #1 ($a) must be of type int, string given,
// echo getSum("1", 1);
echo getSum(1, 1);

echo "<br /><br />";

// Use void if no return value is expected
function greeting(string $name): void
{
  echo "Hello " . $name;
}

greeting("Tomek");
