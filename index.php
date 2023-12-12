<?php

/*
  Challenge 1: Sum of an array

  1. Create an array of numbers
  2. Get the sum of all of the numbers combined and put it into a variable
  3. Get the amount of numbers in the array and put them into a variable
  4. Print out 'The sum of the {amount} numbers is: {sum}'.
*/

echo '<h3>Sum Of An Array</h3>';

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$sum = array_sum($numbers);
$amount = count($numbers);

echo "<p>The sum of the {$amount} numbers is: {$sum}</p>";
