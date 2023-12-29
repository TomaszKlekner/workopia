<?php

// Object Oriented Programming

// Class example
class User
{
  public $name;
  public $email;

  public function login()
  {
    echo "The user logged in";
  }
}

// Instantiate a new User object
$user_01 = new User();
$user_01->name = "John Doe";
$user_01->email = "test@gmail.com";

var_dump($user_01);
echo "<br />";

$user_01->login();
