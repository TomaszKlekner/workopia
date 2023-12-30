<?php

// Object Oriented Programming

// Class example
class User
{
  public $name;
  public $email;
  private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . " logged in.<br />";
  }

  // Getter
  public function getStatus()
  {
    echo $this->status;
  }

  // Setter
  public function setStatus($status)
  {
    $this->status = $status;
  }
}

// Instantiate a new User object
$user_01 = new User("Tomasz", "tomasz@email.com");

$user_01->login();
echo "<br />";
$user_01->setStatus("inactive");
$user_01->getStatus();
