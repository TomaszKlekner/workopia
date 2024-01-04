<?php

// Object Oriented Programming

// Challenge 1
class Article
{
  private $title;
  private $content;
  private $published = false;


  function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  function publish()
  {
    return $this->published = true;
  }

  function isPublished()
  {
    return $this->published;
  }
}

$article_one = new Article("Article One", "Lorem ipsum, dolor sit amet consectetur adipisicing elit.");
$article_two = new Article("Article Two", "Voluptate praesentium omnis corporis necessitatibus?");

$article_one->publish();
echo "<br /><br />";
var_dump($article_one);
echo "<br /><br />";
var_dump($article_two);
echo "<br /><br />";
var_dump($article_one->isPublished());
echo "<br /><br />";
var_dump($article_two->isPublished());
