<?php

// Object Oriented Programming

// Class example
class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . " logged in.<br />";
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    parent::__construct($name, $email);
  }

  public function login()
  {
    echo 'Admin ' . $this->name . " logged in.<br />";
  }

  public function getStatus()
  {
    echo $this->status;
  }
}

$admin_01 = new Admin("Tom Smith", "tom@email.com", 5);

$admin_01->login();

// Static Members and Methods
class MathUtility
{
  public static $pi = 3.14;

  public static function add(...$numbers)
  {
    return array_sum($numbers);
  }
}

// Scope Resolution Operator (::)
echo MathUtility::$pi;

echo "<br />";

echo MathUtility::add(1, 2, 3);
