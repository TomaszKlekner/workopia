<?php

/*
  Challenge 1: Sum of an array

  1. Create an array of numbers
  2. Get the sum of all of the numbers combined and put it into a variable
  3. Get the amount of numbers in the array and put them into a variable
  4. Print out 'The sum of the {amount} numbers is: {sum}'.
*/

echo '<h3>Sum Of An Array</h3>';

$numbers = [1, 2, 3, 4, 5];

$sum = array_sum($numbers);
$amount = count($numbers);

echo "<p>The sum of the {$amount} numbers is: {$sum}</p>";

/*
  Challenge 2: Colors array

  1. Reverse the '$colors' array
  2. Add 'purple' and 'orange' to the end of the array
  3. Replace the second color with 'pink'
  4. Remove the last element of the array
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

// 1.
$reversed_colors = array_reverse($colors);

echo "<p>Reversed colors</p>";
echo "<pre>";
var_dump($reversed_colors);
echo "</pre>";

// 2.
array_push($colors, 'purple', 'orange');

echo "<p>More colors</p>";
echo "<pre>";
var_dump($colors);
echo "</pre>";

// 3.
$colors[1] = "pink";

echo "<p>Replace second color with 'pink'</p>";
echo "<pre>";
var_dump($colors);
echo "</pre>";

// 4.
array_pop($colors);

echo "<p>Remove last element</p>";
echo "<pre>";
var_dump($colors);
echo "</pre>";
