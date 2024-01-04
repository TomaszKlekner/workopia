<?php

// Abstract Classes
abstract class Shape
{
  protected $name;

  // Abstract method
  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // Concrete method
  public function getName()
  {
    return $this->name;
  }
}

class Circle extends Shape
{
  private $radius;

  public function __construct($name, $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape
{
  private $width;
  private $heigth;

  public function __construct($name, $heigth, $width)
  {
    parent::__construct($name);
    $this->heigth = $heigth;
    $this->width = $width;
  }

  public function calculateArea()
  {
    return $this->width * $this->heigth;
  }
}

$circle = new Circle("Circle", 3.5);
var_dump($circle);
echo "<br />";
echo "Circle area: " . $circle->calculateArea();
echo "<br /><br />";

$rectangle = new Rectangle("Rectangle", 10, 7);
var_dump($rectangle);
echo "<br />";
echo "Rectangle area: " . $rectangle->calculateArea();
