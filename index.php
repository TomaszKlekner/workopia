<?php

// Object Oriented Programming

// Class example
class User
{
  public $name;
  public $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . " logged in.";
  }
}

// Instantiate a new User object
$user_01 = new User("Tomasz", "tomasz@email.com");

$user_01->login();
echo "<br />.";
var_dump($user_01);
