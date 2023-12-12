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


/*
  Challenge 3: Job listing array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should ba an array of strings with each skill as person has.
  2. Create a new listing using the `array_push()` function. THe new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job listing Array</h3>';

$job_listing = [
  ["id" => 1, "job_title" => "PHP Developer", "contact_email" => "contact@mail.com", "contact_phone" => "555-555-555", "skills" => [
    "PHP", "MySql", "HTML", "CSS", "JavaScript"
  ]],
  ["id" => 2, "job_title" => "UI Developer", "contact_email" => "contact.me@mail.com", "contact_phone" => "222-555-222", "skills" => [
    "HTML", "CSS", "JavaScript", "React.js", "TypeScript"
  ]],
  ["id" => 3, "job_title" => "DataBase Developer", "contact_email" => "new.contact@mail.com", "contact_phone" => "333-111-777", "skills" => [
    "MongoDB", "Azure Devops"
  ]],
];
